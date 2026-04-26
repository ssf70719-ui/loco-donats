@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero" id="home" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d1b4d 50%, #1a1a1a 100%); color: white; padding-top: 120px;">
        <div class="hero-content" style="z-index: 1;">
            <span class="badge" data-i18n="hero_badge" style="background: rgba(255, 107, 158, 0.2); color: var(--primary-pink); border: 1px solid rgba(255, 107, 158, 0.3);">Qualité Premium</span>
            <h1 data-i18n="hero_title" style="color: white; font-family: var(--font-serif); font-size: 4.5rem; line-height: 1.1;">Adoucissez votre journée avec <span style="color: var(--primary-pink);">des beignets artisanaux</span></h1>
            <p data-i18n="hero_desc" style="color: #ccc; margin-top: 1.5rem; font-size: 1.2rem; max-width: 600px;">Cuit au four frais chaque matin. Laissez-vous tenter par notre collection exquise de beignets artisanaux. Commandez en ligne et faites-vous livrer chez vous.</p>
            <div style="margin-top: 2.5rem;">
                <a href="/menu" class="btn-primary" data-i18n="hero_btn" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); padding: 1.2rem 3rem; font-size: 1.1rem; box-shadow: 0 10px 20px rgba(255, 107, 158, 0.3);">Commander Maintenant</a>
            </div>
        </div>
        <div class="hero-image" style="flex: 1; display: flex; justify-content: center; align-items: center; position: relative;">
            <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(138, 43, 226, 0.2) 0%, transparent 70%); z-index: 0;"></div>
            <img src="{{ asset('images/hero.png') }}" alt="Delicious Donuts Collection" style="max-width: 90%; height: auto; position: relative; z-index: 1; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.5));">
        </div>
    </section>

    <!-- Features -->
    <section class="features" id="features" style="background: #1a1a1a; padding: 5rem 5%; display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
        <div class="feature-box" style="flex: 1; min-width: 300px; max-width: 400px; background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 30px; padding: 3rem; text-align: center; transition: all 0.3s ease;">
            <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); width: 70px; height: 70px; margin: 0 auto 1.5rem; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem;">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <h4 data-i18n="feat1_title" style="color: white; font-size: 1.5rem; margin-bottom: 1rem; font-family: var(--font-serif);">Livraison Rapide</h4>
            <p data-i18n="feat1_desc" style="color: #bbb;">Recevez vos beignets frais et chauds en moins de 30 minutes.</p>
        </div>

        <div class="feature-box" style="flex: 1; min-width: 300px; max-width: 400px; background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 30px; padding: 3rem; text-align: center; transition: all 0.3s ease;">
            <div class="feature-icon" style="background: linear-gradient(135deg, #8a2be2, var(--primary-pink)); width: 70px; height: 70px; margin: 0 auto 1.5rem; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem;">
                <i class="fa-solid fa-medal"></i>
            </div>
            <h4 data-i18n="feat2_title" style="color: white; font-size: 1.5rem; margin-bottom: 1rem; font-family: var(--font-serif);">Qualité Premium</h4>
            <p data-i18n="feat2_desc" style="color: #bbb;">Nous utilisons uniquement les meilleurs ingrédients pour nos créations.</p>
        </div>

        <div class="feature-box" style="flex: 1; min-width: 300px; max-width: 400px; background: #2d2d2d; border: 2px solid var(--primary-pink); border-radius: 30px; padding: 3rem; text-align: center; transition: all 0.3s ease;">
            <div class="feature-icon" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); width: 70px; height: 70px; margin: 0 auto 1.5rem; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem;">
                <i class="fa-solid fa-heart"></i>
            </div>
            <h4 data-i18n="feat3_title" style="color: white; font-size: 1.5rem; margin-bottom: 1rem; font-family: var(--font-serif);">Fait avec Amour</h4>
            <p data-i18n="feat3_desc" style="color: #bbb;">Chaque beignet est préparé à la main avec une attention particulière.</p>
        </div>
    </section>
@endsection
