<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">Loco Donuts - Beignets Premium en ligne</title>
    <meta name="description" content="Commandez les plus délicieux beignets en ligne.">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/donuts.css') }}">
    <style>
        /* Language Switcher */
        .lang-switcher {
            margin-right: 1rem;
        }
        .lang-switcher select {
            background: rgba(255, 255, 255, 0.5);
            border: 1px solid var(--primary-pink);
            color: var(--primary-black);
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 600;
            font-family: var(--font-sans);
            cursor: pointer;
            outline: none;
            transition: var(--transition);
        }
        .lang-switcher select:hover {
            background: var(--primary-pink);
            color: white;
        }

        /* RTL Support for Arabic */
        html[dir="rtl"] body {
            text-align: right;
            font-family: 'Cairo', sans-serif; /* Fallback for Arabic */
        }
        html[dir="rtl"] .logo {
            flex-direction: row-reverse;
        }
        html[dir="rtl"] .nav-links {
            flex-direction: row-reverse;
        }
        html[dir="rtl"] .cart-sidebar {
            right: auto;
            left: -400px;
        }
        html[dir="rtl"] .cart-sidebar.active {
            right: auto;
            left: 0;
        }
        html[dir="rtl"] .cart-header,
        html[dir="rtl"] .product-info,
        html[dir="rtl"] .recipe-card {
            text-align: right;
        }
        html[dir="rtl"] .recipe-badge {
            right: auto;
            left: 20px;
        }
        html[dir="rtl"] .close-recipe {
            right: auto;
            left: 20px;
        }
        html[dir="rtl"] .lang-switcher {
            margin-right: 0;
            margin-left: 1rem;
        }
        html[dir="rtl"] .hero-content {
            padding-right: 0;
            padding-left: 2rem;
        }
        html[dir="rtl"] .recipe-grid ol {
            padding-left: 0;
            padding-right: 1.2rem;
        }
    </style>
</head>
<body>

    <!-- Header & Navigation -->
    <header id="header">
        <div class="logo">
            <a href="/" style="display: flex; align-items: center; gap: 0.5rem;">
                <i class="fa-solid fa-circle-notch fa-spin-pulse" style="color: var(--primary-pink); --fa-animation-duration: 3s;"></i>
                Loco<span>Donuts</span>
            </a>
        </div>
        <nav class="nav-links">
            <a href="/" data-i18n="nav_home">Accueil</a>
            <a href="/menu" data-i18n="nav_menu">Menu</a>

            <a href="/about" data-i18n="nav_about">À propos</a>
            <a href="/contact" data-i18n="nav_contact">Contact</a>
        </nav>
        
        <div style="display: flex; align-items: center;">
            <div class="lang-switcher">
                <select id="lang-select" onchange="changeLanguage(this.value)">
                    <option value="fr">FR</option>
                    <option value="en">EN</option>
                    <option value="ar">AR</option>
                    <option value="es">ES</option>
                </select>
            </div>
            <div class="cart-icon-container" onclick="toggleCart()">
                <i class="fa-solid fa-shopping-bag"></i>
                <span class="cart-count" id="cart-count">0</span>
            </div>
        </div>
    </header>

    <!-- Cart Overlay -->
    <div class="cart-overlay" id="cart-overlay" onclick="toggleCart()"></div>

    <!-- Cart Sidebar -->
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <h3 data-i18n="cart_title">Votre Panier</h3>
            <button class="close-cart" onclick="toggleCart()"><i class="fa-solid fa-times"></i></button>
        </div>
        <div class="cart-items" id="cart-items">
            <!-- Items injected here -->
            <p style="text-align:center; color:#999; margin-top: 2rem;" data-i18n="cart_empty">Votre panier est vide.</p>
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <span data-i18n="cart_total">Total:</span>
                <span id="cart-total-price">0.00 DH</span>
            </div>
            <button class="btn-checkout" onclick="checkout()" data-i18n="cart_checkout">Commander</button>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <div class="logo" style="color: white; justify-content: center;">
                Loco<span style="color: var(--primary-pink)">Donuts</span>
            </div>
            <p style="max-width: 400px; color: #999;" data-i18n="footer_desc">Nous nous engageons à vous offrir les meilleurs beignets de la ville. Faits à la main avec amour et les meilleurs ingrédients.</p>
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://wa.me/212635266609" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="copyright">
            &copy; <span id="year">2026</span> Loco Donuts. <span data-i18n="footer_rights">Tous droits réservés.</span>
        </div>
    </footer>

    <!-- JavaScript for Interactions & i18n -->
    <script>
        // Translations Dictionary
        const i18n = {
            fr: {
                title: "Loco Donuts - Beignets Premium en ligne",
                nav_home: "Accueil", nav_menu: "Menu", nav_waffles: "Gaufres", nav_about: "À propos", nav_contact: "Contact",
                cart_title: "Votre Panier", cart_empty: "Votre panier est vide.", cart_total: "Total:", cart_checkout: "Commander",
                hero_badge: "Qualité Premium", hero_title: "Adoucissez votre journée avec <span>des beignets artisanaux</span>", hero_desc: "Cuit au four frais chaque matin. Laissez-vous tenter par notre collection exquise de beignets artisanaux. Commandez en ligne et faites-vous livrer chez vous.", hero_btn: "Commander Maintenant",
                feat1_title: "Livraison Rapide", feat1_desc: "Recevez vos beignets frais et chauds en moins de 30 minutes.",
                feat2_title: "Ingrédients Frais", feat2_desc: "Nous utilisons uniquement des ingrédients de la plus haute qualité, d'origine locale.", feat2_btn: "Voir les Ingrédients &rarr;",
                feat3_title: "Goût Premium", feat3_desc: "Recettes primées créées par des chefs pâtissiers experts.", feat3_btn: "Voir les Recettes Secrètes &rarr;",
                menu_title: "Nos Meilleures Ventes", menu_subtitle: "Découvrez notre irrésistible sélection de saveurs.",
                prod1_title: "Chocolat Riche", prod1_desc: "Glaçage au chocolat noir avec des pépites arc-en-ciel.",
                prod2_title: "Vanille Classique", prod2_desc: "Doux glaçage à la vanille avec un glaçage blanc délicat.",
                prod3_title: "Fraise Rose", prod3_desc: "Glaçage aux fraises fraîches garni de pépites colorées.",
                prod4_title: "Caramel Salé", prod4_desc: "Glaçage lisse au caramel avec une touche de sel de mer.",
                menu_drinks_title: "Nos Boissons", menu_drinks_subtitle: "Rafraîchissez-vous avec nos spécialités.",
                prod5_title: "Ice Coffee", prod5_desc: "Un café glacé premium, rafraîchissant et énergisant.",
                prod6_title: "Lemonade Citron", prod6_desc: "Notre spécialité! Limonade fraîche maison avec un zeste de citron.",
                menu_waffles_title: "Gaufres & Crêpes", menu_waffles_subtitle: "Des délices chauds préparés à la commande.",
                prod7_title: "Gaufre Premium", prod7_desc: "Gaufre croustillante avec coulis de chocolat et fruits.",
                prod8_title: "Crêpe Nutella", prod8_desc: "Crêpe fondante fourrée au Nutella et noisettes.",
                prod9_title: "Coca-Cola", prod9_desc: "Le goût original et rafraîchissant de Coca-Cola.",
                prod10_title: "Pepsi", prod10_desc: "Boisson gazeuse rafraîchissante au goût unique.",
                menu_energy_title: "Boissons Énergisantes", menu_energy_subtitle: "Pour un coup de boost immédiat.",
                prod11_title: "Monster Energy", prod11_desc: "Libérez la bête avec Monster Energy.",
                prod12_title: "Red Bull", prod12_desc: "Red Bull vous donne des ailes.",
                prod_prime_title: "Prime Energy", prod_prime_desc: "L'énergie ultime par Logan Paul & KSI.",
                footer_desc: "Nous nous engageons à vous offrir les meilleurs beignets de la ville. Faits à la main avec amour et les meilleurs ingrédients.", footer_rights: "Tous droits réservés.",
                wa_msg_start: "👋 Bonjour ! Je voudrais passer une commande chez Loco Donuts :%0A%0A", wa_msg_total: "Total", wa_msg_thanks: "Merci !"
            },
            en: {
                title: "Loco Donuts - Premium Donuts Online",
                nav_home: "Home", nav_menu: "Menu", nav_waffles: "Waffles", nav_about: "About", nav_contact: "Contact",
                cart_title: "Your Cart", cart_empty: "Your cart is empty.", cart_total: "Total:", cart_checkout: "Checkout",
                hero_badge: "Premium Quality", hero_title: "Sweeten Your Day With <span>Artisan Donuts</span>", hero_desc: "Freshly baked every morning. Indulge in our exquisite collection of handcrafted donuts. Order online and get them delivered to your door.", hero_btn: "Order Now",
                feat1_title: "Fast Delivery", feat1_desc: "Get your donuts fresh and warm in under 30 minutes.",
                feat2_title: "Fresh Ingredients", feat2_desc: "We use only the highest quality, locally sourced ingredients.", feat2_btn: "View Ingredients &rarr;",
                feat3_title: "Premium Taste", feat3_desc: "Award-winning recipes crafted by expert pastry chefs.", feat3_btn: "View Secret Recipes &rarr;",
                menu_title: "Our Best Sellers", menu_subtitle: "Discover our irresistible selection of flavors.",
                prod1_title: "Rich Chocolate", prod1_desc: "Dark chocolate glaze with rainbow sprinkles.",
                prod2_title: "Classic Vanilla", prod2_desc: "Sweet vanilla glaze with delicate white icing.",
                prod3_title: "Pink Strawberry", prod3_desc: "Fresh strawberry glaze topped with colorful sprinkles.",
                prod4_title: "Salted Caramel", prod4_desc: "Smooth caramel glaze with a hint of sea salt.",
                menu_drinks_title: "Our Drinks", menu_drinks_subtitle: "Refresh yourself with our specialties.",
                prod5_title: "Ice Coffee", prod5_desc: "Premium iced coffee, refreshing and energizing.",
                prod6_title: "Lemonade Citron", prod6_desc: "Our specialty! Fresh homemade lemonade with lemon zest.",
                menu_waffles_title: "Waffles & Crepes", menu_waffles_subtitle: "Warm delights made to order.",
                prod7_title: "Premium Waffle", prod7_desc: "Crispy waffle with chocolate drizzle and fruits.",
                prod8_title: "Nutella Crepe", prod8_desc: "Melt-in-your-mouth crepe filled with Nutella and hazelnuts.",
                prod9_title: "Coca-Cola", prod9_desc: "The original refreshing taste of Coca-Cola.",
                prod10_title: "Pepsi", prod10_desc: "Refreshing carbonated soft drink with a unique taste.",
                menu_energy_title: "Energy Drinks", menu_energy_subtitle: "For an immediate energy boost.",
                prod11_title: "Monster Energy", prod11_desc: "Unleash the beast with Monster Energy.",
                prod12_title: "Red Bull", prod12_desc: "Red Bull gives you wings.",
                prod_prime_title: "Prime Energy", prod_prime_desc: "Ultimate energy by Logan Paul & KSI.",
                footer_desc: "We are dedicated to bringing you the best donuts in town. Handcrafted with love and the finest ingredients.", footer_rights: "All Rights Reserved.",
                wa_msg_start: "👋 Hello! I would like to order from Loco Donuts:%0A%0A", wa_msg_total: "Total", wa_msg_thanks: "Thank you!"
            },
            ar: {
                title: "Loco Donuts - دوناتس فاخرة أونلاين",
                nav_home: "الرئيسية", nav_menu: "القائمة", nav_waffles: "الوافل", nav_about: "عنّا", nav_contact: "اتصل بنا",
                cart_title: "سلة المشتريات", cart_empty: "سلتك فارغة.", cart_total: "المجموع:", cart_checkout: "إتمام الطلب",
                hero_badge: "جودة فاخرة", hero_title: "حلي يومك مع <span>أشهى الدوناتس</span>", hero_desc: "مخبوزة طازجة كل صباح. استمتع بتشكيلتنا الرائعة من الدوناتس المصنوعة بحب. اطلب عبر الإنترنت وتوصلك لباب الدار.", hero_btn: "اطلب الآن",
                feat1_title: "توصيل سريع", feat1_desc: "احصل على الدوناتس طازجة وساخنة في أقل من 30 دقيقة.",
                feat2_title: "مكونات طازجة", feat2_desc: "نستخدم فقط المكونات المحلية عالية الجودة.", feat2_btn: "&larr; شاهد المكونات",
                feat3_title: "مذاق فاخر", feat3_desc: "وصفات حائزة على جوائز مصممة من قبل أمهر الطهاة.", feat3_btn: "&larr; شاهد الوصفات السرية",
                menu_title: "الأكثر مبيعاً", menu_subtitle: "اكتشف تشكيلة النكهات التي لا تقاوم.",
                prod1_title: "شوكولاتة غنية", prod1_desc: "طبقة شوكولاتة داكنة مع رشات ملونة.",
                prod2_title: "فانيلا كلاسيكية", prod2_desc: "فانيلا حلوة مع كريمة بيضاء لذيذة.",
                prod3_title: "فراولة وردية", prod3_desc: "طبقة فراولة طازجة مزينة برشات ملونة.",
                prod4_title: "كراميل مملح", prod4_desc: "كراميل ناعم مع لمسة من ملح البحر.",
                menu_drinks_title: "مشروباتنا", menu_drinks_subtitle: "انتعش مع مشروباتنا الخاصة.",
                prod5_title: "آيس كوفي", prod5_desc: "قهوة باردة فاخرة، منعشة وتعطيك طاقة.",
                prod6_title: "ليمونادة سيترون", prod6_desc: "تخصصنا! ليمونادة طازجة منعشة مع لمسة حامض.",
                menu_waffles_title: "وافل وكريب", menu_waffles_subtitle: "حلويات ساخنة تحضر عند الطلب.",
                prod7_title: "وافل فاخر", prod7_desc: "وافل مقرمش مع صوص الشوكولاتة والفواكه.",
                prod8_title: "كريب نوتيلا", prod8_desc: "كريب يذوب في الفم محشو بالنوتيلا والبندق.",
                prod9_title: "كوكا كولا", prod9_desc: "المذاق الأصلي والمنعش لكوكا كولا.",
                prod10_title: "بيبسي", prod10_desc: "مشروب غازي منعش بمذاق فريد.",
                menu_energy_title: "مشروبات الطاقة", menu_energy_subtitle: "للحصول على طاقة فورية.",
                prod11_title: "مونستر إنرجي", prod11_desc: "أطلق العنان للوحش مع مونستر.",
                prod12_title: "ريد بول", prod12_desc: "ريد بول بيعطيك جوانح.",
                prod_prime_title: "برايم إنرجي", prod_prime_desc: "الطاقة القصوى من لوجان بول و KSI.",
                footer_desc: "نحن ملتزمون بتقديم أفضل الدوناتس في المدينة. مصنوعة بحب وبأجود المكونات.", footer_rights: "جميع الحقوق محفوظة.",
                wa_msg_start: "👋 السلام عليكم! بغيت ندير كوموند من Loco Donuts:%0A%0A", wa_msg_total: "المجموع", wa_msg_thanks: "شكراً!"
            },
            es: {
                title: "Loco Donuts - Donuts Premium Online",
                nav_home: "Inicio", nav_menu: "Menú", nav_waffles: "Gofres", nav_about: "Sobre Nosotros", nav_contact: "Contacto",
                cart_title: "Tu Carrito", cart_empty: "Tu carrito está vacío.", cart_total: "Total:", cart_checkout: "Pagar",
                hero_badge: "Calidad Premium", hero_title: "Endulza tu día con <span>donuts artesanales</span>", hero_desc: "Horneado fresco cada mañana. Déjate seducir por nuestra exquisita colección de donuts artesanales. Pide online y recíbelos en tu puerta.", hero_btn: "Pedir Ahora",
                feat1_title: "Envío Rápido", feat1_desc: "Recibe tus donuts frescos y calientes en menos de 30 minutos.",
                feat2_title: "Ingredientes Frescos", feat2_desc: "Solo utilizamos ingredientes de la más alta calidad, de origen local.", feat2_btn: "Ver Ingredientes &rarr;",
                feat3_title: "Sabor Premium", feat3_desc: "Recetas galardonadas creadas por expertos maestros pasteleros.", feat3_btn: "Ver Recetas Secretas &rarr;",
                menu_title: "Nuestros Más Vendidos", menu_subtitle: "Descubre nuestra irresistible selección de sabores.",
                prod1_title: "Chocolate Rico", prod1_desc: "Glaseado de chocolate negro con chispas de arco iris.",
                prod2_title: "Vainilla Clásica", prod2_desc: "Dulce glaseado de vainilla con un delicado glaseado blanco.",
                prod3_title: "Fresa Rosa", prod3_desc: "Glaseado de fresa fresca rematado con chispas de colores.",
                prod4_title: "Caramelo Salado", prod4_desc: "Glaseado de caramelo suave con un toque de sal marina.",
                menu_drinks_title: "Nuestras Bebidas", menu_drinks_subtitle: "Refréscate con nuestras especialidades.",
                prod5_title: "Café Helado", prod5_desc: "Café helado premium, refrescante y energizante.",
                prod6_title: "Limonada de Limón", prod6_desc: "¡Nuestra especialidad! Limonada casera fresca con ralladura de limón.",
                menu_waffles_title: "Gofres y Crepes", menu_waffles_subtitle: "Delicias calientes preparadas al momento.",
                prod7_title: "Gofre Premium", prod7_desc: "Gofre crujiente con sirope de chocolate y frutas.",
                prod8_title: "Crepe de Nutella", prod8_desc: "Crepe suave relleno de Nutella y avellanas.",
                prod9_title: "Coca-Cola", prod9_desc: "El sabor original y refrescante de Coca-Cola.",
                prod10_title: "Pepsi", prod10_desc: "Refresco carbonatado con un sabor único.",
                menu_energy_title: "Bebidas Energéticas", menu_energy_subtitle: "Para un impulso de energía inmediato.",
                prod11_title: "Monster Energy", prod11_desc: "Desata a la bestia con Monster Energy.",
                prod12_title: "Red Bull", prod12_desc: "Red Bull te da alas.",
                prod_prime_title: "Prime Energy", prod_prime_desc: "Energía definitiva por Logan Paul y KSI.",
                footer_desc: "Nos dedicamos a traerte los mejores donuts de la ciudad. Hechos a mano con amor y los mejores ingredientes.", footer_rights: "Todos los derechos reservados.",
                wa_msg_start: "👋 ¡Hola! Me gustaría hacer un pedido en Loco Donuts:%0A%0A", wa_msg_total: "Total", wa_msg_thanks: "¡Gracias!"
            }
        };

        let currentLang = localStorage.getItem('siteLang') || 'fr';
        
        function applyTranslations() {
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (i18n[currentLang] && i18n[currentLang][key]) {
                    el.innerHTML = i18n[currentLang][key];
                }
            });
            renderCart(); // Re-render cart to update translated product names if possible
        }

        function changeLanguage(lang) {
            currentLang = lang;
            localStorage.setItem('siteLang', lang);
            document.getElementById('lang-select').value = lang;
            
            // Set direction for Arabic
            if(lang === 'ar') {
                document.documentElement.setAttribute('dir', 'rtl');
                document.documentElement.setAttribute('lang', 'ar');
            } else {
                document.documentElement.setAttribute('dir', 'ltr');
                document.documentElement.setAttribute('lang', lang);
            }
            
            applyTranslations();
        }

        // Initialize Language and Cart on load
        document.addEventListener("DOMContentLoaded", () => {
            changeLanguage(currentLang);
            updateCartCount();
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Cart State with LocalStorage
        let cart = JSON.parse(localStorage.getItem('locoCart')) || [];

        function saveCart() {
            localStorage.setItem('locoCart', JSON.stringify(cart));
            updateCartCount();
        }

        function toggleCart() {
            document.getElementById('cart-sidebar').classList.toggle('active');
            document.getElementById('cart-overlay').classList.toggle('active');
            renderCart();
        }

        function addToCart(id, titleKey, price, image) {
            const existingItem = cart.find(item => item.id === id);
            if (existingItem) {
                existingItem.qty += 1;
            } else {
                cart.push({ id, titleKey, price, image, qty: 1 });
            }
            saveCart();
            
            // Show cart automatically
            document.getElementById('cart-sidebar').classList.add('active');
            document.getElementById('cart-overlay').classList.add('active');
            renderCart();
        }

        function updateQty(id, change) {
            const item = cart.find(item => item.id === id);
            if (item) {
                item.qty += change;
                if (item.qty <= 0) {
                    cart = cart.filter(i => i.id !== id);
                }
            }
            saveCart();
            renderCart();
        }

        function updateCartCount() {
            const count = cart.reduce((total, item) => total + item.qty, 0);
            document.getElementById('cart-count').innerText = count;
            
            const counter = document.getElementById('cart-count');
            counter.style.transform = 'scale(1.5)';
            setTimeout(() => {
                counter.style.transform = 'scale(1)';
            }, 200);
        }

        function renderCart() {
            const cartItemsContainer = document.getElementById('cart-items');
            const cartTotalPrice = document.getElementById('cart-total-price');
            
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = `<p style="text-align:center; color:#999; margin-top: 2rem;">${i18n[currentLang].cart_empty}</p>`;
                cartTotalPrice.innerText = '0.00 DH';
                return;
            }

            let html = '';
            let total = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.qty;
                total += itemTotal;
                
                // Get translated title
                const translatedTitle = i18n[currentLang][item.titleKey] || item.titleKey;
                
                html += `
                <div class="cart-item">
                    <div class="cart-item-img">
                        <img src="${item.image}" alt="${translatedTitle}">
                    </div>
                    <div class="cart-item-info">
                        <div class="cart-item-title">${translatedTitle}</div>
                        <div class="cart-item-price">${item.price} DH</div>
                        <div class="cart-item-qty">
                            <button class="qty-btn" onclick="updateQty(${item.id}, -1)">-</button>
                            <span>${item.qty}</span>
                            <button class="qty-btn" onclick="updateQty(${item.id}, 1)">+</button>
                        </div>
                    </div>
                </div>
                `;
            });

            cartItemsContainer.innerHTML = html;
            cartTotalPrice.innerText = total.toFixed(2) + ' DH';
        }

        function checkout() {
            if (cart.length === 0) {
                alert(i18n[currentLang].cart_empty);
                return;
            }
            
            let message = i18n[currentLang].wa_msg_start;
            let total = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.qty;
                total += itemTotal;
                const translatedTitle = i18n[currentLang][item.titleKey] || item.titleKey;
                message += `- ${item.qty}x ${translatedTitle} (${itemTotal} DH)%0A`;
            });
            
            message += `%0A💰 *${i18n[currentLang].wa_msg_total}: ${total.toFixed(2)} DH*%0A%0A`;
            message += i18n[currentLang].wa_msg_thanks;
            
            const whatsappNumber = "212635266609";
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${message}`;
            
            window.open(whatsappUrl, '_blank');
            
            cart = [];
            saveCart();
            toggleCart();
        }
    </script>
</body>
</html>
