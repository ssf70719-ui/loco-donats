function initLocoBot() {
    // 1. Inject Chatbot HTML Structure into body
    const chatHTML = `
        <div id="loco-chatbot-container">
            <!-- Chat Window -->
            <div id="loco-chatbot-window">
                <div id="loco-chatbot-header">
                    <div class="chatbot-header-info">
                        <div class="chatbot-header-avatar">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <div class="chatbot-header-title">
                            <h4>LocoBot</h4>
                            <p>Online & Ready to help</p>
                        </div>
                    </div>
                    <button class="chatbot-close-btn" id="chatbot-close-btn">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                
                <div id="loco-chatbot-messages">
                    <!-- Messages will appear here -->
                </div>
                
                <div id="loco-chatbot-input-area">
                    <input type="text" id="loco-chatbot-input" placeholder="Écrivez votre message..." autocomplete="off">
                    <button id="loco-chatbot-send-btn">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </div>

            <!-- Floating Action Button -->
            <div id="loco-chatbot-fab">
                <i class="fa-solid fa-comment-dots"></i>
            </div>
        </div>
    `;
    document.body.insertAdjacentHTML('beforeend', chatHTML);

    // 2. Chatbot State & DOM Elements
    const fab = document.getElementById('loco-chatbot-fab');
    const chatWindow = document.getElementById('loco-chatbot-window');
    const closeBtn = document.getElementById('chatbot-close-btn');
    const messagesContainer = document.getElementById('loco-chatbot-messages');
    const inputField = document.getElementById('loco-chatbot-input');
    const sendBtn = document.getElementById('loco-chatbot-send-btn');
    
    let isChatOpen = false;
    let welcomeMessageShown = false;

    // Toggle Chat
    function toggleChat() {
        isChatOpen = !isChatOpen;
        if (isChatOpen) {
            chatWindow.classList.add('active');
            fab.innerHTML = '<i class="fa-solid fa-times"></i>';
            if (!welcomeMessageShown) {
                setTimeout(() => {
                    addBotMessage("👋 Salam! Hello! Bonjour! Je suis LocoBot. Comment puis-je vous aider ? / How can I help you? / Kifach n9dar n3awnek?");
                    welcomeMessageShown = true;
                }, 500);
            }
            inputField.focus();
        } else {
            chatWindow.classList.remove('active');
            fab.innerHTML = '<i class="fa-solid fa-comment-dots"></i>';
        }
    }

    fab.addEventListener('click', toggleChat);
    closeBtn.addEventListener('click', toggleChat);

    // 3. Database of Products (From Loco Donuts)
    const products = [
        { name: 'Chocolat Riche', price: 25, img: 'images/chocolate.png', cat: 'donuts', desc: 'Glaçage au chocolat noir avec des pépites arc-en-ciel.' },
        { name: 'Vanille Classique', price: 20, img: 'images/vanilla.png', cat: 'donuts', desc: 'Doux glaçage à la vanille avec un glaçage blanc délicat.' },
        { name: 'Fraise Rose', price: 22, img: 'https://images.unsplash.com/photo-1551024601-bec78aea704b?w=400&q=80', cat: 'donuts', desc: 'Glaçage aux fraises fraîches garni de pépites colorées.' },
        { name: 'Caramel Salé', price: 28, img: 'images/chocolate.png', cat: 'donuts', desc: 'Glaçage lisse au caramel avec une touche de sel de mer.' },
        { name: 'Gaufre Belge Classique', price: 45, img: 'https://cravinghomecooked.com/wp-content/uploads/2019/02/easy-waffle-recipe-1-16.jpg', cat: 'waffles', desc: 'Gaufre belge authentique avec vanille bourbon.' },
        { name: 'Crêpe Nutella Artisanale', price: 40, img: 'https://www.marthastewart.com/thmb/VRchS9fA-MQOfky15-z7InEqNHs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/MS-341273-Buttermilk-Waffles-Hero-47268-3-ca0af4352f6648c2b8a85ad8524c5b1b.jpg', cat: 'waffles', desc: 'Nutella pur noisettes d\\'Italie.' },
        { name: 'Nutella Cruffin', price: 38, img: 'https://www.bambambakehouse.com/cdn/shop/products/Nutell-cruffin-website_1000x1000.jpg?v=1624850066', cat: 'croissants', desc: 'L\\'hybride parfait entre croissant et muffin, fourré au Nutella.' },
        { name: 'New York Roll', price: 42, img: 'https://latelier-papilles.com/wp-content/uploads/2023/11/actu-atelier-papilles-new-york-roll.jpg', cat: 'croissants', desc: 'Le célèbre Suprême feuilleté avec crème pâtissière onctueuse.' },
        { name: 'Ice Coffee', price: 25, img: 'https://images.unsplash.com/photo-1499961024600-ad094db305cc?w=400&q=80', cat: 'drinks', desc: 'Un café glacé premium, rafraîchissant et énergisant.' },
        { name: 'Lemonade Citron', price: 20, img: 'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?w=400&q=80', cat: 'drinks', desc: 'Limonade fraîche maison avec un zeste de citron.' },
        { name: 'Coca-Cola', price: 15, img: 'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=400&q=80', cat: 'drinks', desc: 'Le goût original et rafraîchissant de Coca-Cola.' },
        { name: 'Monster Energy', price: 35, img: 'https://images.unsplash.com/photo-1622543925917-763c34d1a86e?w=400&q=80', cat: 'energy', desc: 'Libérez la bête avec Monster Energy.' },
        { name: 'Red Bull', price: 30, img: 'https://kickinchicken.com/wp-content/uploads/2023/08/Red-Bull-Energy-Drink.jpg', cat: 'energy', desc: 'Red Bull vous donne des ailes.' },
        { name: 'Prime Energy', price: 45, img: 'https://www.stack3d.com/wp-content/uploads/2025/01/prime-energy-drink-16oz.jpg', cat: 'energy', desc: 'L\\'énergie ultime par Logan Paul & KSI.' }
    ];

    // 4. Chat Logic & Intent Recognition
    function processUserMessage(msg) {
        const text = msg.toLowerCase();
        
        // Detect language
        let lang = 'fr'; // default
        if (text.match(/\b(salam|marhaba|chno|wach|chhal|bchhal|taman|tawssil|njiblik|bghit|nakhed|nchri)\b/)) lang = 'ar';
        else if (text.match(/\b(hello|hi|price|how much|delivery|order|buy|what)\b/)) lang = 'en';

        // Dictionary
        const dict = {
            greetings: {
                fr: "Bonjour! Bienvenue chez Loco Donuts. Que désirez-vous savoir ?",
                en: "Hello! Welcome to Loco Donuts. What would you like to know?",
                ar: "Salam! Marhaba bik f Loco Donuts. Kifach n9dar n3awnek?"
            },
            menu_intro: {
                fr: "Nous avons plusieurs délices! Voici quelques best-sellers :<br>",
                en: "We have many delicious treats! Here are some best-sellers :<br>",
                ar: "3andna bezaf dyal l7wayj zwinin! Hado chi whdin mn a7san l-mabi3at :<br>"
            },
            menu_outro: {
                fr: "Vous pouvez voir tout le menu en cliquant sur l'onglet 'Menu' en haut!",
                en: "You can see the full menu by clicking the 'Menu' tab at the top!",
                ar: "T9dar tchouf l-menu kamel ila klickiiti 3la 'Menu' lfo9!"
            },
            price_found: (name, price) => {
                if(lang === 'en') return `The price of our **${name}** is **${price} DH**.<br>`;
                if(lang === 'ar') return `Taman dyal **${name}** howa **${price} DH**.<br>`;
                return `Le prix de notre **${name}** est de **${price} DH**.<br>`;
            },
            price_not_found: {
                fr: "De quel produit voulez-vous savoir le prix ? Nos donuts commencent à partir de 20 DH et nos gaufres à partir de 40 DH.",
                en: "Which product's price would you like to know? Our donuts start from 20 DH and waffles from 40 DH.",
                ar: "Taman dyal ayna produit bghiti t3raf? Les donuts kaybdaw mn 20 DH w les gaufres mn 40 DH."
            },
            delivery: {
                fr: "🚗 Nous offrons une **Livraison Rapide** en moins de 30 minutes! Vous pouvez commander directement sur le site ou via WhatsApp.",
                en: "🚗 We offer **Fast Delivery** in under 30 minutes! You can order directly on the site or via WhatsApp.",
                ar: "🚗 Kandiro **Tawssil Sari3** f a9al mn 30 dqiqa! T9dar tcommander f site wla f WhatsApp."
            },
            order: {
                fr: `Pour commander, utilisez le panier ou envoyez-nous un message sur WhatsApp : <br><a href="https://wa.me/212635266609" target="_blank" style="color:var(--primary-pink);font-weight:bold;"><i class="fa-brands fa-whatsapp"></i> +212 635 266 609</a>`,
                en: `To order, use the cart or send us a message on WhatsApp : <br><a href="https://wa.me/212635266609" target="_blank" style="color:var(--primary-pink);font-weight:bold;"><i class="fa-brands fa-whatsapp"></i> +212 635 266 609</a>`,
                ar: `Bach tcommander, khdem l-panier wla sift lina message f WhatsApp : <br><a href="https://wa.me/212635266609" target="_blank" style="color:var(--primary-pink);font-weight:bold;"><i class="fa-brands fa-whatsapp"></i> +212 635 266 609</a>`
            },
            mention: (name, price) => {
                if(lang === 'en') return `Ah, the **${name}**! Great choice for **${price} DH**.<br>`;
                if(lang === 'ar') return `Ah, **${name}**! Ikhtiyar zwin b **${price} DH**.<br>`;
                return `Ah, le **${name}**! C'est un excellent choix à **${price} DH**.<br>`;
            },
            fallback: {
                fr: "Je suis LocoBot, je suis encore en apprentissage! 😊 Pour commander, contactez-nous sur WhatsApp au **+212 635 266 609**.",
                en: "I am LocoBot, still learning! 😊 To order, please contact us on WhatsApp at **+212 635 266 609**.",
                ar: "Ana LocoBot, mazal kant3lem! 😊 Bach tcommander, sift lina f WhatsApp 3la **+212 635 266 609**."
            }
        };

        // Greetings
        if (text.match(/\b(salam|bonjour|salut|hello|hi|marhaba)\b/)) {
            return dict.greetings[lang];
        }
        
        // Ask for menu / products
        if (text.match(/\b(menu|produit|produits|beignet|beignets|donut|donuts|chno 3andkom|wach 3andkom|waffles|gaufres|products|treats)\b/)) {
            let reply = dict.menu_intro[lang];
            const sample = products.sort(() => 0.5 - Math.random()).slice(0, 3);
            reply += generateProductsHTML(sample);
            reply += dict.menu_outro[lang];
            return reply;
        }

        // Ask for ingredients
        if (text.match(/\b(ingredient|ingrédient|ingrédients|mokawinat|makadir|ach fiha|consist|made of)\b/)) {
            let foundProd = products.find(p => text.includes(p.name.toLowerCase().split(' ')[0]));
            if (foundProd) {
                if(lang === 'ar') return `L-mokawinat dyal **${foundProd.name}** homa: ${foundProd.desc}<br>` + generateProductsHTML([foundProd]);
                if(lang === 'en') return `The ingredients of **${foundProd.name}** are: ${foundProd.desc}<br>` + generateProductsHTML([foundProd]);
                return `Les ingrédients de **${foundProd.name}** sont : ${foundProd.desc}<br>` + generateProductsHTML([foundProd]);
            } else {
                if(lang === 'ar') return "Mokawinat dyal ayna produit bghiti t3raf? (Matlan: mokawinat chocolat)";
                if(lang === 'en') return "Which product's ingredients would you like to know? (e.g. ingredients chocolate)";
                return "De quel produit voulez-vous savoir les ingrédients ? (Ex: ingrédients chocolat)";
            }
        }

        // Ask for specific product price
        if (text.match(/\b(chhal|bchhal|prix|price|taman|combien|how much)\b/)) {
            let foundProd = products.find(p => text.includes(p.name.toLowerCase().split(' ')[0]));
            if (foundProd) {
                return dict.price_found(foundProd.name, foundProd.price) + generateProductsHTML([foundProd]);
            } else {
                return dict.price_not_found[lang];
            }
        }

        // Delivery
        if (text.match(/\b(livraison|tawssil|delivery|toussil|livrer|njiblik)\b/)) {
            return dict.delivery[lang];
        }

        // Order / Contact
        if (text.match(/\b(commander|order|bghit nakhed|bghit nchri|whatsapp|contact|achète|buy|purchase)\b/)) {
            return dict.order[lang];
        }

        // Ask for recommendation
        if (text.match(/\b(9tara7|qtara7|suggest|propose|recommande|suggère|suggere|chnou nakhod|chno nakhod|wach tnsahni|recommend)\b/)) {
            const sample = products.sort(() => 0.5 - Math.random()).slice(0, 3);
            if(lang === 'ar') {
                return `**Ikhtiyar L-Youm 🌟**<br>Kanqtara7 3lik tjarab had l-bennah lyoum:<br>` + generateProductsHTML(sample);
            } else if(lang === 'en') {
                return `**Selection of the Day 🌟**<br>I suggest you try these delicious treats today:<br>` + generateProductsHTML(sample);
            } else {
                return `**La Sélection du Jour 🌟**<br>Je vous propose de goûter à ces délices aujourd'hui :<br>` + generateProductsHTML(sample);
            }
        }

        // Specific product mention without intent
        let foundProd = products.find(p => text.includes(p.name.toLowerCase().split(' ')[0]));
        if (foundProd) {
             return dict.mention(foundProd.name, foundProd.price) + generateProductsHTML([foundProd]);
        }

        // Fallback
        return dict.fallback[lang];
    }

    function generateProductsHTML(prods) {
        let html = '';
        prods.forEach(p => {
            html += `
            <div class="chat-product-card">
                <img src="${p.img}" class="chat-product-img" alt="${p.name}">
                <div class="chat-product-info">
                    <h5>${p.name}</h5>
                    <p>${p.price} DH</p>
                </div>
            </div>`;
        });
        return html;
    }

    // 5. Messaging Functions
    function addUserMessage(text) {
        const msgDiv = document.createElement('div');
        msgDiv.className = 'chat-message user';
        msgDiv.innerText = text;
        messagesContainer.appendChild(msgDiv);
        scrollToBottom();
    }

    function addBotMessage(htmlContent) {
        const msgDiv = document.createElement('div');
        msgDiv.className = 'chat-message bot';
        msgDiv.innerHTML = htmlContent;
        messagesContainer.appendChild(msgDiv);
        scrollToBottom();
    }

    function scrollToBottom() {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function handleSend() {
        const text = inputField.value.trim();
        if (text === '') return;
        
        // Add User message
        addUserMessage(text);
        inputField.value = '';

        // Simulate typing delay
        setTimeout(() => {
            const reply = processUserMessage(text);
            addBotMessage(reply);
        }, 600);
    }

    sendBtn.addEventListener('click', handleSend);
    inputField.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') handleSend();
    });

}

// Launch chatbot safely
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLocoBot);
} else {
    initLocoBot();
}
