@extends('layouts.app')

@section('content')

    <!-- Spacer for fixed header -->
    <div style="height: 100px; background: #1a1a1a;"></div>

    <!-- Menu / Products: Donuts -->
    <section class="products" id="donuts" style="background: linear-gradient(135deg, #1a1a1a 0%, #2a1a3a 50%, #1a1a1a 100%); padding: 4rem 5%;">
        <h2 class="section-title" style="color: var(--primary-pink); text-align: center; font-family: var(--font-serif); margin-bottom: 10px;" data-i18n="menu_title">Nos Meilleures Ventes</h2>
        <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 40px;" data-i18n="menu_subtitle">Découvrez notre irrésistible sélection de saveurs.</p>

        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 20px; padding: 1.5rem; transition: var(--transition);">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; background: rgba(0,0,0,0.2); margin-bottom: 1rem;">
                    <img src="{{ asset('images/chocolate.png') }}" alt="Chocolate" style="width: 80%; transition: transform 0.3s ease;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white; font-size: 1.3rem;" data-i18n="prod1_title">Chocolat Riche</h3>
                    <p class="product-desc" style="color: #bbb; font-size: 0.9rem;" data-i18n="prod1_desc">Glaçage au chocolat noir avec des pépites arc-en-ciel.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: var(--primary-pink); font-weight: 800; font-size: 1.4rem;">25 DH</span>
                        <button class="btn-add" onclick="addToCart(1, 'prod1_title', 25, '{{ asset('images/chocolate.png') }}')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 20px; padding: 1.5rem; transition: var(--transition);">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; background: rgba(0,0,0,0.2); margin-bottom: 1rem;">
                    <img src="{{ asset('images/vanilla.png') }}" alt="Vanilla" style="width: 80%; transition: transform 0.3s ease;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white; font-size: 1.3rem;" data-i18n="prod2_title">Vanille Classique</h3>
                    <p class="product-desc" style="color: #bbb; font-size: 0.9rem;" data-i18n="prod2_desc">Doux glaçage à la vanille avec un glaçage blanc délicat.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: #8a2be2; font-weight: 800; font-size: 1.4rem;">20 DH</span>
                        <button class="btn-add" onclick="addToCart(2, 'prod2_title', 20, '{{ asset('images/vanilla.png') }}')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 20px; padding: 1.5rem; transition: var(--transition);">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; background: rgba(0,0,0,0.2); margin-bottom: 1rem;">
                    <img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?w=400&q=80" alt="Strawberry" style="width: 80%; border-radius: 50%;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white; font-size: 1.3rem;" data-i18n="prod3_title">Fraise Rose</h3>
                    <p class="product-desc" style="color: #bbb; font-size: 0.9rem;" data-i18n="prod3_desc">Glaçage aux fraises fraîches garni de pépites colorées.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: var(--primary-pink); font-weight: 800; font-size: 1.4rem;">22 DH</span>
                        <button class="btn-add" onclick="addToCart(3, 'prod3_title', 22, 'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=100&q=80')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 20px; padding: 1.5rem; transition: var(--transition);">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; background: rgba(0,0,0,0.2); margin-bottom: 1rem;">
                    <img src="{{ asset('images/chocolate.png') }}" alt="Caramel" style="width: 80%; filter: sepia(1) hue-rotate(-50deg) saturate(2);">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white; font-size: 1.3rem;" data-i18n="prod4_title">Caramel Salé</h3>
                    <p class="product-desc" style="color: #bbb; font-size: 0.9rem;" data-i18n="prod4_desc">Glaçage lisse au caramel avec une touche de sel de mer.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: #8a2be2; font-weight: 800; font-size: 1.4rem;">28 DH</span>
                        <button class="btn-add" onclick="addToCart(4, 'prod4_title', 28, '{{ asset('images/chocolate.png') }}')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu / Products: Special Gaufres -->
    <section class="products" id="waffles" style="padding: 4rem 5%; background: #1a1a1a; color: white;">
        <h2 class="section-title" style="color: #8a2be2; text-align: center; margin-bottom: 10px; font-family: var(--font-serif); text-transform: lowercase;">special gaufres</h2>
        <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 40px; font-size: 16px;">Nos créations artisanales préparées avec passion</p>

        <div class="product-grid">
            <!-- Gaufre Belge Classique -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 30px rgba(255,107,158,0.15); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://cravinghomecooked.com/wp-content/uploads/2019/02/easy-waffle-recipe-1-16.jpg" alt="Gaufre Belge Classique" style="height: 100%; width: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(255,107,158,0.4);">Premium</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Gaufre Belge Classique</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Gaufre belge authentique avec vanille bourbon</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 1.5rem; font-weight: 800;">45 DH</span>
                        <button class="btn-add" onclick="addToCart(13, 'Gaufre Belge Classique', 45, 'https://cravinghomecooked.com/wp-content/uploads/2019/02/easy-waffle-recipe-1-16.jpg')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem; cursor: pointer; transition: all 0.3s ease;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Crêpe Nutella Artisanale -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 30px rgba(138,43,226,0.2); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://www.marthastewart.com/thmb/VRchS9fA-MQOfky15-z7InEqNHs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/MS-341273-Buttermilk-Waffles-Hero-47268-3-ca0af4352f6648c2b8a85ad8524c5b1b.jpg" alt="Crêpe Nutella Artisanale" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(138,43,226,0.4);">Signature</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Crêpe Nutella Artisanale</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Nutella pur noisettes d'Italie</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: #8a2be2; font-size: 1.5rem; font-weight: 800;">40 DH</span>
                        <button class="btn-add" onclick="addToCart(14, 'Crêpe Nutella Artisanale', 40, 'https://www.marthastewart.com/thmb/VRchS9fA-MQOfky15-z7InEqNHs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/MS-341273-Buttermilk-Waffles-Hero-47268-3-ca0af4352f6648c2b8a85ad8524c5b1b.jpg')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Gaufre Chocolat Noir -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 30px rgba(255,107,158,0.15); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://cdn.shopify.com/s/files/1/0173/8181/8422/files/20240523183203-screenshot-202024-05-10-20at-204.png?v=1716489126&width=1600&height=900" alt="Gaufre Chocolat Noir" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(255,107,158,0.4);">Chocolat</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Gaufre Chocolat Noir</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Chocolat noir 70% avec copeaux belges</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 1.5rem; font-weight: 800;">50 DH</span>
                        <button class="btn-add" onclick="addToCart(15, 'Gaufre Chocolat Noir', 50, 'https://cdn.shopify.com/s/files/1/0173/8181/8422/files/20240523183203-screenshot-202024-05-10-20at-204.png?v=1716489126&width=1600&height=900')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Crêpe Fraise & Menthe -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 30px rgba(138,43,226,0.2); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/9/9/0/FNK_the-best-buttermilk-waffles_H.JPG.rend.hgtvcom.1280.1280.suffix/1568145463670.webp" alt="Crêpe Fraise & Menthe" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(138,43,226,0.4);">Fruits Frais</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Crêpe Fraise & Menthe</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Fraises fraîches et menthe bio</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: #8a2be2; font-size: 1.5rem; font-weight: 800;">42 DH</span>
                        <button class="btn-add" onclick="addToCart(16, 'Crêpe Fraise & Menthe', 42, 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/9/9/0/FNK_the-best-buttermilk-waffles_H.JPG.rend.hgtvcom.1280.1280.suffix/1568145463670.webp')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu / Products: Croissants -->
    <section class="products" id="croissants" style="padding: 4rem 5%; background: linear-gradient(135deg, #1a1a1a 0%, #2a1a3a 50%, #1a1a1a 100%); color: white;">
        <h2 class="section-title" style="color: var(--primary-pink); text-align: center; margin-bottom: 10px; font-family: var(--font-serif); text-transform: lowercase;">special croissants</h2>
        <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 40px; font-size: 16px;">Viennoiseries artisanales croustillantes et fondantes</p>

        <div class="product-grid">
            <!-- Nutella Cruffin -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 30px rgba(255,107,158,0.15); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://www.bambambakehouse.com/cdn/shop/products/Nutell-cruffin-website_1000x1000.jpg?v=1624850066" alt="Nutella Cruffin" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(255,107,158,0.4);">Nouveau</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Nutella Cruffin</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">L'hybride parfait entre croissant et muffin, fourré au Nutella.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 1.5rem; font-weight: 800;">38 DH</span>
                        <button class="btn-add" onclick="addToCart(20, 'Nutella Cruffin', 38, 'https://www.bambambakehouse.com/cdn/shop/products/Nutell-cruffin-website_1000x1000.jpg?v=1624850066')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem; cursor: pointer; transition: all 0.3s ease;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- New York Roll -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 30px rgba(138,43,226,0.2); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://latelier-papilles.com/wp-content/uploads/2023/11/actu-atelier-papilles-new-york-roll.jpg" alt="New York Roll" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(138,43,226,0.4);">Tendance</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">New York Roll</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Le célèbre Suprême feuilleté avec crème pâtissière onctueuse.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: #8a2be2; font-size: 1.5rem; font-weight: 800;">42 DH</span>
                        <button class="btn-add" onclick="addToCart(21, 'New York Roll', 42, 'https://latelier-papilles.com/wp-content/uploads/2023/11/actu-atelier-papilles-new-york-roll.jpg')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Croissant au Nutella -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 15px; box-shadow: 0 10px 30px rgba(255,107,158,0.15); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://tuduu-prd-assets-fde-ghdcd5e6baagctam.z01.azurefd.net/recipesimages/recipe-6629.jpg?v=8DD75D31F865725" alt="Croissant au Nutella" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: var(--primary-pink); color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(255,107,158,0.4);">Classique</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Croissant au Nutella</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Croissant au beurre AOP fourré généreusement au Nutella.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: var(--primary-pink); font-size: 1.5rem; font-weight: 800;">32 DH</span>
                        <button class="btn-add" onclick="addToCart(22, 'Croissant au Nutella', 32, 'https://tuduu-prd-assets-fde-ghdcd5e6baagctam.z01.azurefd.net/recipesimages/recipe-6629.jpg?v=8DD75D31F865725')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Croissant au Beurre -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 15px; box-shadow: 0 10px 30px rgba(138,43,226,0.2); transition: transform 0.3s ease;">
                <div class="product-img-container" style="position: relative; overflow: hidden; border-radius: 15px 15px 0 0; height: 220px;">
                    <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=800&q=80" alt="Croissant au Beurre" style="height: 100%; width: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 10px; right: 10px; background: #8a2be2; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(138,43,226,0.4);">Pur Beurre</div>
                </div>
                <div class="product-info" style="padding: 25px; text-align: center; background: #2d2d2d; border-radius: 0 0 15px 15px;">
                    <h3 class="product-title" style="color: white; font-size: 1.4rem; margin-bottom: 10px; font-weight: 600;">Croissant au Beurre</h3>
                    <p class="product-desc" style="color: #ccc; font-size: 0.95rem; line-height: 1.5; margin-bottom: 20px;">Le classique indémodable, pur beurre et extra croustillant.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 15px;">
                        <span class="product-price" style="color: #8a2be2; font-size: 1.5rem; font-weight: 800;">25 DH</span>
                        <button class="btn-add" onclick="addToCart(23, 'Croissant au Beurre', 25, 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=100&q=80')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; padding: 10px 20px; border-radius: 25px; font-weight: bold; font-size: 0.9rem;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu / Products: Drinks -->
    <section class="products" id="drinks" style="background: #1a1a1a; padding: 4rem 5%;">
        <h2 class="section-title" style="color: #8a2be2; text-align: center; font-family: var(--font-serif); margin-bottom: 10px;" data-i18n="menu_drinks_title">Nos Boissons</h2>
        <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 40px;" data-i18n="menu_drinks_subtitle">Rafraîchissez-vous avec nos spécialités.</p>

        <div class="product-grid">
            <!-- Product 5 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 20px; padding: 1.5rem;">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                    <img src="https://images.unsplash.com/photo-1499961024600-ad094db305cc?w=400&q=80" alt="Ice Coffee" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white;" data-i18n="prod5_title">Ice Coffee</h3>
                    <p class="product-desc" style="color: #bbb;" data-i18n="prod5_desc">Un café glacé premium, rafraîchissant et énergisant.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: #8a2be2; font-weight: 800; font-size: 1.4rem;">25 DH</span>
                        <button class="btn-add" onclick="addToCart(5, 'prod5_title', 25, 'https://images.unsplash.com/photo-1499961024600-ad094db305cc?w=100&q=80')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 20px; padding: 1.5rem;">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                    <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=400&q=80" alt="Lemonade Citron" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white;" data-i18n="prod6_title">Lemonade Citron</h3>
                    <p class="product-desc" style="color: #bbb;" data-i18n="prod6_desc">Notre spécialité! Limonade fraîche maison avec un zeste de citron.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: var(--primary-pink); font-weight: 800; font-size: 1.4rem;">20 DH</span>
                        <button class="btn-add" onclick="addToCart(6, 'prod6_title', 20, 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=100&q=80')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 9 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 20px; padding: 1.5rem;">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                    <img src="https://images.unsplash.com/photo-1554866585-cd94860890b7?w=400&q=80" alt="Coca-Cola" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white;" data-i18n="prod9_title">Coca-Cola</h3>
                    <p class="product-desc" style="color: #bbb;" data-i18n="prod9_desc">Le goût original et rafraîchissant de Coca-Cola.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: #8a2be2; font-weight: 800; font-size: 1.4rem;">15 DH</span>
                        <button class="btn-add" onclick="addToCart(9, 'prod9_title', 15, 'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=100&q=80')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product 10 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 20px; padding: 1.5rem;">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                    <img src="https://images.unsplash.com/photo-1546695259-ad30ff3fd643?w=400&q=80" alt="Pepsi" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white;" data-i18n="prod10_title">Pepsi</h3>
                    <p class="product-desc" style="color: #bbb;" data-i18n="prod10_desc">Boisson gazeuse rafraîchissante au goût unique.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: var(--primary-pink); font-weight: 800; font-size: 1.4rem;">15 DH</span>
                        <button class="btn-add" onclick="addToCart(10, 'prod10_title', 15, 'https://images.unsplash.com/photo-1546695259-ad30ff3fd643?w=100&q=80')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu / Products: Energy Drinks -->
    <section class="products" id="energy" style="background: linear-gradient(135deg, #1a1a1a 0%, #3d1a3a 50%, #1a1a1a 100%); padding: 4rem 5%;">
        <h2 class="section-title" style="color: var(--primary-pink); text-align: center; font-family: var(--font-serif); margin-bottom: 10px;" data-i18n="menu_energy_title">Boissons Énergisantes</h2>
        <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 40px;" data-i18n="menu_energy_subtitle">Pour un coup de boost immédiat.</p>

        <div class="product-grid">
            <!-- Product 11 -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 20px; padding: 1.5rem;">
                <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                    <img src="https://images.unsplash.com/photo-1622543925917-763c34d1a86e?w=400&q=80" alt="Monster Energy" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="color: white;" data-i18n="prod11_title">Monster Energy</h3>
                    <p class="product-desc" style="color: #bbb;" data-i18n="prod11_desc">Libérez la bête avec Monster Energy.</p>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span class="product-price" style="color: var(--primary-pink); font-weight: 800; font-size: 1.4rem;">35 DH</span>
                        <button class="btn-add" onclick="addToCart(11, 'prod11_title', 35, 'https://images.unsplash.com/photo-1622543925917-763c34d1a86e?w=100&q=80')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

             <!-- Product 12 -->
             <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 20px; padding: 1.5rem;">
                 <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                     <img src="https://kickinchicken.com/wp-content/uploads/2023/08/Red-Bull-Energy-Drink.jpg" alt="Red Bull" style="width: 100%; height: 100%; object-fit: cover;">
                 </div>
                 <div class="product-info">
                     <h3 class="product-title" style="color: white;" data-i18n="prod12_title">Red Bull</h3>
                     <p class="product-desc" style="color: #bbb;" data-i18n="prod12_desc">Red Bull vous donne des ailes.</p>
                     <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                         <span class="product-price" style="color: #8a2be2; font-weight: 800; font-size: 1.4rem;">30 DH</span>
                         <button class="btn-add" onclick="addToCart(12, 'prod12_title', 30, 'https://kickinchicken.com/wp-content/uploads/2023/08/Red-Bull-Energy-Drink.jpg')" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                 </div>
             </div>

             <!-- Product Prime Energy -->
             <div class="product-card" style="background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 20px; padding: 1.5rem;">
                 <div class="product-img-container" style="height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem;">
                     <img src="https://www.stack3d.com/wp-content/uploads/2025/01/prime-energy-drink-16oz.jpg" alt="Prime Energy" style="width: 100%; height: 100%; object-fit: cover;">
                 </div>
                 <div class="product-info">
                     <h3 class="product-title" style="color: white;" data-i18n="prod_prime_title">Prime Energy</h3>
                     <p class="product-desc" style="color: #bbb;" data-i18n="prod_prime_desc">L'énergie ultime par Logan Paul & KSI.</p>
                     <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                         <span class="product-price" style="color: var(--primary-pink); font-weight: 800; font-size: 1.4rem;">45 DH</span>
                         <button class="btn-add" onclick="addToCart(24, 'prod_prime_title', 45, 'https://www.stack3d.com/wp-content/uploads/2025/01/prime-energy-drink-16oz.jpg')" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; width: 40px; height: 40px; border-radius: 50%;"><i class="fa-solid fa-plus"></i></button>
                     </div>
                 </div>
             </div>
        </div>
    </section>

@endsection
