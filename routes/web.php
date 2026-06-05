<?php

use Illuminate\Support\Facades\Route;



use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    $products = Product::inRandomOrder()->limit(3)->get();
    return view('index', compact('products'));
});

Route::get('/menu', function () {
    $products = Product::all();
    return view('menu', compact('products'));
});

Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');

Route::resource('admin/products', ProductController::class)->names([
    'index' => 'admin.products.index',
    'create' => 'admin.products.create',
    'store' => 'admin.products.store',
    'edit' => 'admin.products.edit',
    'update' => 'admin.products.update',
    'destroy' => 'admin.products.destroy',
]);

Route::get('/computers', function () {
    return view('computers');
});

Route::get('/mans_clothes', function () {
    return view('mans_clothes');
});

Route::get('/womans_clothes', function () {
    return view('womans_clothes');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/redpool', function () {
    return view('redpool');
});

Route::get('/waffles', function () {
    return view('waffles');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/sitemap.xml', function () {
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>' . url('/') . '</loc><changefreq>daily</changefreq><priority>1.0</priority></url>
    <url><loc>' . url('/menu') . '</loc><changefreq>daily</changefreq><priority>0.9</priority></url>
    <url><loc>' . url('/about') . '</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc>' . url('/contact') . '</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
</urlset>';
    return response($xml, 200)->header('Content-Type', 'text/xml');
});
