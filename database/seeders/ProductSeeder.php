<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Donuts
            ['name' => 'Chocolat Riche', 'description' => 'Glaçage au chocolat noir avec des pépites arc-en-ciel.', 'price' => 25, 'image_url' => 'images/chocolate.png', 'category' => 'donuts', 'badge' => null],
            ['name' => 'Vanille Classique', 'description' => 'Doux glaçage à la vanille avec un glaçage blanc délicat.', 'price' => 20, 'image_url' => 'images/vanilla.png', 'category' => 'donuts', 'badge' => null],
            ['name' => 'Fraise Rose', 'description' => 'Glaçage aux fraises fraîches garni de pépites colorées.', 'price' => 22, 'image_url' => 'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=400&q=80', 'category' => 'donuts', 'badge' => null],
            ['name' => 'Caramel Salé', 'description' => 'Glaçage lisse au caramel avec une touche de sel de mer.', 'price' => 28, 'image_url' => 'images/chocolate.png', 'category' => 'donuts', 'badge' => null],
            
            // Waffles
            ['name' => 'Gaufre Belge Classique', 'description' => 'Gaufre belge authentique avec vanille bourbon', 'price' => 45, 'image_url' => 'https://cravinghomecooked.com/wp-content/uploads/2019/02/easy-waffle-recipe-1-16.jpg', 'category' => 'waffles', 'badge' => 'Premium'],
            ['name' => 'Crêpe Nutella Artisanale', 'description' => 'Nutella pur noisettes d\'Italie', 'price' => 40, 'image_url' => 'https://www.marthastewart.com/thmb/VRchS9fA-MQOfky15-z7InEqNHs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/MS-341273-Buttermilk-Waffles-Hero-47268-3-ca0af4352f6648c2b8a85ad8524c5b1b.jpg', 'category' => 'waffles', 'badge' => 'Signature'],
            ['name' => 'Gaufre Chocolat Noir', 'description' => 'Chocolat noir 70% avec copeaux belges', 'price' => 50, 'image_url' => 'https://cdn.shopify.com/s/files/1/0173/8181/8422/files/20240523183203-screenshot-202024-05-10-20at-204.png?v=1716489126&width=1600&height=900', 'category' => 'waffles', 'badge' => 'Chocolat'],
            ['name' => 'Crêpe Fraise & Menthe', 'description' => 'Fraises fraîches et menthe bio', 'price' => 42, 'image_url' => 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/9/9/0/FNK_the-best-buttermilk-waffles_H.JPG.rend.hgtvcom.1280.1280.suffix/1568145463670.webp', 'category' => 'waffles', 'badge' => 'Fruits Frais'],

            // Croissants
            ['name' => 'Nutella Cruffin', 'description' => 'L\'hybride parfait entre croissant et muffin, fourré au Nutella.', 'price' => 38, 'image_url' => 'https://www.bambambakehouse.com/cdn/shop/products/Nutell-cruffin-website_1000x1000.jpg?v=1624850066', 'category' => 'croissants', 'badge' => 'Nouveau'],
            ['name' => 'New York Roll', 'description' => 'Le célèbre Suprême feuilleté avec crème pâtissière onctueuse.', 'price' => 42, 'image_url' => 'https://latelier-papilles.com/wp-content/uploads/2023/11/actu-atelier-papilles-new-york-roll.jpg', 'category' => 'croissants', 'badge' => 'Tendance'],
            ['name' => 'Croissant au Nutella', 'description' => 'Croissant au beurre AOP fourré généreusement au Nutella.', 'price' => 32, 'image_url' => 'https://tuduu-prd-assets-fde-ghdcd5e6baagctam.z01.azurefd.net/recipesimages/recipe-6629.jpg?v=8DD75D31F865725', 'category' => 'croissants', 'badge' => 'Classique'],
            ['name' => 'Croissant au Beurre', 'description' => 'Le classique indémodable, pur beurre et extra croustillant.', 'price' => 25, 'image_url' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=800&q=80', 'category' => 'croissants', 'badge' => 'Pur Beurre'],

            // Drinks
            ['name' => 'Ice Coffee', 'description' => 'Un café glacé premium, rafraîchissant et énergisant.', 'price' => 25, 'image_url' => 'https://images.unsplash.com/photo-1499961024600-ad094db305cc?w=400&q=80', 'category' => 'drinks', 'badge' => null],
            ['name' => 'Lemonade Citron', 'description' => 'Notre spécialité! Limonade fraîche maison avec un zeste de citron.', 'price' => 20, 'image_url' => 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=400&q=80', 'category' => 'drinks', 'badge' => null],
            ['name' => 'Coca-Cola', 'description' => 'Le goût original et rafraîchissant de Coca-Cola.', 'price' => 15, 'image_url' => 'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=400&q=80', 'category' => 'drinks', 'badge' => null],
            ['name' => 'Pepsi', 'description' => 'Boisson gazeuse rafraîchissante au goût unique.', 'price' => 15, 'image_url' => 'https://images.unsplash.com/photo-1546695259-ad30ff3fd643?w=400&q=80', 'category' => 'drinks', 'badge' => null],

            // Energy Drinks
            ['name' => 'Monster Energy', 'description' => 'Libérez la bête avec Monster Energy.', 'price' => 35, 'image_url' => 'https://images.unsplash.com/photo-1622543925917-763c34d1a86e?w=400&q=80', 'category' => 'energy', 'badge' => null],
            ['name' => 'Red Bull', 'description' => 'Red Bull vous donne des ailes.', 'price' => 30, 'image_url' => 'https://kickinchicken.com/wp-content/uploads/2023/08/Red-Bull-Energy-Drink.jpg', 'category' => 'energy', 'badge' => null],
            ['name' => 'Prime Energy', 'description' => 'L\'énergie ultime par Logan Paul & KSI.', 'price' => 45, 'image_url' => 'https://www.stack3d.com/wp-content/uploads/2025/01/prime-energy-drink-16oz.jpg', 'category' => 'energy', 'badge' => null],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
