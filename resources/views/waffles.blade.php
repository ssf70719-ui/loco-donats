<!DOCTYPE html>
<html lang="fr">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>special gaufres - Collection Premium</title>
      <meta name="keywords" content="waffles, gaufres, crepes, desserts, premium">
      <meta name="description" content="Collection professionnelle de gaufres et crêpes premium">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/donuts.css') }}">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      
      <style>
         .products { background: #1a1a1a !important; }
         .section-title { font-family: 'Playfair Display', serif; }
         .product-card { transition: all 0.3s ease; }
         .product-card:hover { transform: translateY(-10px); }
      </style>
   </head>
   <body style="background: #1a1a1a; color: white;">
      <!-- header section start -->
      <div class="header_section haeder_main" style="background: rgba(26,26,26,0.9); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255,255,255,0.1);">
         <div class="container-fluid">
            <nav class="navbar navbar-light justify-content-between">
               <div id="mySidenav" class="sidenav" style="background: #1a1a1a;">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="{{ url('/') }}">Accueil</a>
                  <a href="{{ url('/menu') }}">Menu</a>
                  <a href="{{ url('/redpool') }}">Redpool Spécial</a>
                  <a href="{{ url('/contact') }}">Contact</a>
               </div>
               <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="{{ asset('images/toggle-icon.png') }}"></span>
               <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" style="max-height: 50px;"></a>
               <div style="display: flex; gap: 1rem; align-items: center;">
                  <a href="/menu" style="color: white; font-weight: bold;"><i class="fa-solid fa-arrow-left"></i> Retour</a>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->

      <!-- Waffles Hero Section -->
      <section class="hero" id="home" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d1b4d 50%, #1a1a1a 100%); min-height: 60vh; padding: 100px 5%;">
         <div class="hero-content">
            <span class="badge" style="background: var(--primary-pink); color: white;">Collection Premium</span>
            <h1 style="color: #fff; font-family: 'Playfair Display', serif; font-size: 4rem;">special gaufres <span style="color: #8a2be2;">Pro</span></h1>
            <p style="color: #ccc; font-size: 18px;">Découvrez notre sélection exclusive de gaufres artisanales et crêpes gourmandes.</p>
            <a href="#waffles-menu" class="btn-primary" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; padding: 15px 40px; border-radius: 30px;">Découvrir la Collection</a>
         </div>
      </section>

      <!-- Waffles Menu Section -->
      <section class="products" id="waffles-menu" style="padding: 80px 5%; background: #1a1a1a;">
         <div class="container">
            <h2 class="section-title" style="color: #8a2be2; text-align: center; margin-bottom: 20px; font-size: 3rem;">Notre Collection de special gaufres</h2>
            <p class="section-subtitle" style="text-align: center; color: #999; margin-bottom: 60px;">Chaque gaufre est préparée à la commande avec des ingrédients frais.</p>

            <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
               <!-- Belgian Waffle -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 25px rgba(255,107,158,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?w=400&q=80" alt="Belgian Waffle" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Premium</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Gaufre Belge Classique</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Gaufre belge authentique avec un mélange exclusif de vanille bourbon.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 24px; font-weight: bold;">45 DH</span>
                        <button class="btn-add" onclick="addToCart(13, 'Gaufre Belge Classique', 45, 'https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?w=100&q=80')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>

               <!-- Nutella Crepe -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 25px rgba(138,43,226,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?w=400&q=80" alt="Nutella Crepe" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Signature</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Crêpe Nutella Artisanale</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Crêpe fine préparée avec du Nutella pur noisettes d'Italie.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: #8a2be2; font-size: 24px; font-weight: bold;">40 DH</span>
                        <button class="btn-add" onclick="addToCart(14, 'Crêpe Nutella Artisanale', 40, 'https://images.unsplash.com/photo-1621303837174-89787a7d4729?w=100&q=80')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>

               <!-- Chocolate Waffle -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 25px rgba(255,107,158,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="{{ asset('images/chocolate_waffle.png') }}" alt="Chocolate Waffle" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Chocolat</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Gaufre Chocolat Noir</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Gaufre au chocolat noir 70% avec copeaux de chocolat belge.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 24px; font-weight: bold;">50 DH</span>
                        <button class="btn-add" onclick="addToCart(15, 'Gaufre Chocolat Noir', 50, '{{ asset('images/chocolate_waffle.png') }}')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>

               <!-- Strawberry Crepe -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 25px rgba(138,43,226,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&q=80" alt="Strawberry Crepe" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Fruits Frais</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Crêpe Fraise & Menthe</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Crêpe légère garnie de fraises fraîches de saison.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: #8a2be2; font-size: 24px; font-weight: bold;">42 DH</span>
                        <button class="btn-add" onclick="addToCart(16, 'Crêpe Fraise & Menthe', 42, 'https://images.unsplash.com/photo-1551024506-0bccd828d307?w=100&q=80')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Croissants Section -->
      <section class="products" id="croissants-menu" style="padding: 80px 5%; background: linear-gradient(135deg, #1a1a1a 0%, #2a1a3a 50%, #1a1a1a 100%);">
         <div class="container">
            <h2 class="section-title" style="color: var(--primary-pink); text-align: center; margin-bottom: 20px; font-size: 3rem;">Nos Croissants Artisans</h2>
            <p class="section-subtitle" style="text-align: center; color: #999; margin-bottom: 60px;">Viennoiseries fraîches du jour, feuilletées à la perfection.</p>

            <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
               <!-- Nutella Cruffin -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 25px rgba(255,107,158,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://www.bambambakehouse.com/cdn/shop/products/Nutell-cruffin-website_1000x1000.jpg?v=1624850066" alt="Nutella Cruffin" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Nouveau</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Nutella Cruffin</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Mélange divin entre croissant et muffin, cœur Nutella.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 24px; font-weight: bold;">38 DH</span>
                        <button class="btn-add" onclick="addToCart(20, 'Nutella Cruffin', 38, 'https://www.bambambakehouse.com/cdn/shop/products/Nutell-cruffin-website_1000x1000.jpg?v=1624850066')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>

               <!-- New York Roll -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 25px rgba(138,43,226,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://latelier-papilles.com/wp-content/uploads/2023/11/actu-atelier-papilles-new-york-roll.jpg" alt="New York Roll" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Tendance</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">New York Roll</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Feuilletage circulaire croustillant à la crème onctueuse.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: #8a2be2; font-size: 24px; font-weight: bold;">42 DH</span>
                        <button class="btn-add" onclick="addToCart(21, 'New York Roll', 42, 'https://latelier-papilles.com/wp-content/uploads/2023/11/actu-atelier-papilles-new-york-roll.jpg')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>

               <!-- Croissant Nutella -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 25px rgba(255,107,158,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://tuduu-prd-assets-fde-ghdcd5e6baagctam.z01.azurefd.net/recipesimages/recipe-6629.jpg?v=8DD75D31F865725" alt="Croissant Nutella" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Délice</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Croissant Nutella</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">Croissant pur beurre AOP fourré au Nutella italien.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 24px; font-weight: bold;">32 DH</span>
                        <button class="btn-add" onclick="addToCart(22, 'Croissant Nutella', 32, 'https://tuduu-prd-assets-fde-ghdcd5e6baagctam.z01.azurefd.net/recipesimages/recipe-6629.jpg?v=8DD75D31F865725')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>

               <!-- Croissant Beurre -->
               <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 25px rgba(138,43,226,0.15);">
                  <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0;">
                     <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=800&q=80" alt="Croissant Beurre" style="height: 250px; width: 100%; object-fit: cover;">
                     <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;">Classique</div>
                  </div>
                  <div class="product-info" style="padding: 25px; color: white;">
                     <h3 class="product-title" style="color: white; font-size: 22px; margin-bottom: 10px;">Croissant au Beurre</h3>
                     <p class="product-desc" style="color: #bbb; line-height: 1.6; margin-bottom: 15px;">L'authentique croissant français, croustillant et léger.</p>
                     <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="product-price" style="color: #8a2be2; font-size: 24px; font-weight: bold;">25 DH</span>
                        <button class="btn-add" onclick="addToCart(23, 'Croissant Beurre', 25, 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=100&q=80')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 45px; height: 45px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Footer -->
      <footer style="background: #000; padding: 40px 0; text-align: center; border-top: 1px solid rgba(255,255,255,0.1);">
         <div class="container">
            <p class="copyright_text" style="color: #666;">© 2024 special gaufres. Tous droits réservés.</p>
         </div>
      </footer>

      <!-- Scripts -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>