#!/usr/bin/env bash
# exit on error
set -o errexit

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets (CSS/JS)
npm install
npm run build

# Create SQLite database file if it doesn't exist
mkdir -p /var/data
touch /var/data/database.sqlite

# Run database migrations
php artisan migrate --force

# Seed the database with products (only if products table is empty)
php artisan db:seed --class=ProductSeeder --force

# Cache everything for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions on storage
chmod -R 775 storage bootstrap/cache
