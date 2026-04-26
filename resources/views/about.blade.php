@extends('layouts.app')

@section('content')
<style>
    .about-section {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d1b4d 50%, #1a1a1a 100%);
        min-height: 100vh;
        padding: 120px 5% 60px;
        color: white;
    }

    .category-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }

    .category-card {
        flex: 1;
        min-width: 300px;
        max-width: 350px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 2px solid #8a2be2;
        border-radius: 30px;
        padding: 2.5rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }

    .category-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(138, 43, 226, 0.2), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-15px) scale(1.02);
        border-color: var(--primary-pink);
        box-shadow: 0 20px 40px rgba(138, 43, 226, 0.3);
    }

    .category-card:hover::before {
        opacity: 1;
    }

    .category-icon {
        font-size: 3.5rem;
        color: var(--primary-pink);
        margin-bottom: 1.5rem;
        filter: drop-shadow(0 5px 15px rgba(255, 107, 158, 0.4));
    }

    .category-title {
        font-family: var(--font-serif);
        font-size: 1.8rem;
        margin-bottom: 1rem;
        text-transform: lowercase;
    }

    /* Recipe Modal Styling */
    .recipe-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(8px);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 2000;
        padding: 20px;
    }

    .recipe-content {
        background: #1a1a1a;
        width: 100%;
        max-width: 800px;
        border-radius: 30px;
        border: 2px solid var(--primary-pink);
        padding: 3rem;
        position: relative;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 0 50px rgba(255, 107, 158, 0.2);
    }

    .close-recipe {
        position: absolute;
        top: 20px;
        right: 25px;
        background: none;
        border: none;
        color: white;
        font-size: 2rem;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .close-recipe:hover {
        color: var(--primary-pink);
    }

    .recipe-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .recipe-header h2 {
        font-family: var(--font-serif);
        color: var(--primary-pink);
        font-size: 2.5rem;
        text-transform: lowercase;
    }

    .recipe-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .recipe-item {
        background: rgba(255, 255, 255, 0.05);
        padding: 1.5rem;
        border-radius: 20px;
        border: 1px solid rgba(138, 43, 226, 0.3);
        transition: all 0.3s ease;
    }

    .recipe-item:hover {
        background: rgba(138, 43, 226, 0.1);
        border-color: var(--primary-pink);
        transform: scale(1.05);
    }

    .recipe-item h4 {
        color: var(--primary-pink);
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
    }

    .recipe-item p {
        color: #ccc;
        font-size: 0.9rem;
        line-height: 1.4;
    }
</style>

<div class="about-section">
    <div style="text-align: center; margin-bottom: 4rem;">
        <h2 style="color: #8a2be2; font-family: var(--font-serif); font-size: 3rem; margin-bottom: 15px; text-transform: lowercase;">découvrez nos secrets</h2>
        <p style="color: #e0b0ff; font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Cliquez sur une catégorie pour découvrir nos créations et leurs secrets de préparation.</p>
    </div>

    <div class="category-container">
        <!-- Donuts -->
        <div class="category-card" onclick="showRecipes('donuts')">
            <div class="category-icon"><i class="fa-solid fa-circle-notch"></i></div>
            <h3 class="category-title">donuts</h3>
            <p style="color: #bbb;">L'art du beignet artisanal, moelleux et coloré.</p>
        </div>

        <!-- Waffles -->
        <div class="category-card" onclick="showRecipes('waffles')">
            <div class="category-icon"><i class="fa-solid fa-border-all"></i></div>
            <h3 class="category-title">gaufres</h3>
            <p style="color: #bbb;">Croustillantes à l'extérieur, fondantes à l'intérieur.</p>
        </div>

        <!-- Croissants -->
        <div class="category-card" onclick="showRecipes('croissants')">
            <div class="category-icon"><i class="fa-solid fa-croissant"></i></div>
            <h3 class="category-title" style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                croissants
            </h3>
            <p style="color: #bbb;">Feuilletage pur beurre et viennoiseries d'exception.</p>
        </div>
    </div>
</div>

<!-- Recipe Modal -->
<div class="recipe-overlay" id="recipeModal">
    <div class="recipe-content">
        <button class="close-recipe" onclick="closeRecipes()">&times;</button>
        <div class="recipe-header">
            <h2 id="modalTitle">Recettes</h2>
        </div>
        <div class="recipe-list" id="modalList">
            <!-- Items injected via JS -->
        </div>
    </div>
</div>

<script>
    const recipesData = {
        donuts: [
            { name: "Chocolat Riche", desc: "Base briochée, glaçage chocolat noir 70%, pépites arc-en-ciel premium." },
            { name: "Vanille Classique", desc: "Pâte infusée à la vanille bourbon, glaçage fondant et filet de chocolat blanc." },
            { name: "Fraise Rose", desc: "Confit de fraises fraîches, glaçage rose naturel et éclats de fruits." },
            { name: "Caramel Salé", desc: "Caramel beurre salé maison, pointe de sel de mer et croquant amande." }
        ],
        waffles: [
            { name: "Gaufre Belge Classique", desc: "Recette traditionnelle de Liège, sucre perlé caramélisé et vanille." },
            { name: "Crêpe Nutella Artisanale", desc: "Pâte légère à la fleur d'oranger, Nutella fondant et noisettes grillées." },
            { name: "Gaufre Chocolat Noir", desc: "Pâte au cacao, nappage chocolat noir intense et chantilly maison." },
            { name: "Crêpe Fraise & Menthe", desc: "Fraises Mara des bois, menthe fraîche ciselée et coulis de fruits rouges." }
        ],
        croissants: [
            { name: "Nutella Cruffin", desc: "Le mariage d'un croissant et d'un muffin, cœur coulant Nutella." },
            { name: "New York Roll", desc: "Feuilletage circulaire ultra-croustillant, crème pâtissière onctueuse." },
            { name: "Croissant au Nutella", desc: "Feuilletage 24h, beurre AOP, cœur généreux au Nutella." },
            { name: "Croissant au Beurre", desc: "100% beurre Charentes-Poitou, croustillant et alvéolage parfait." }
        ]
    };

    function showRecipes(category) {
        const modal = document.getElementById('recipeModal');
        const list = document.getElementById('modalList');
        const title = document.getElementById('modalTitle');
        
        title.innerText = category;
        list.innerHTML = '';
        
        recipesData[category].forEach(item => {
            list.innerHTML += `
                <div class="recipe-item">
                    <h4>${item.name}</h4>
                    <p>${item.desc}</p>
                </div>
            `;
        });
        
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeRecipes() {
        document.getElementById('recipeModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close on click outside
    window.onclick = function(event) {
        const modal = document.getElementById('recipeModal');
        if (event.target == modal) {
            closeRecipes();
        }
    }
</script>

@endsection
