@extends('layouts.app')

@section('content')

    <!-- Spacer for fixed header -->
    <div style="height: 100px; background: #1a1a1a;"></div>

    <!-- Redpool Section -->
    <section class="redpool-hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #4a0000 50%, #1a1a1a 100%); padding: 6rem 5%; color: white; text-align: center;">
        <h1 style="font-size: 4rem; font-family: var(--font-serif); margin-bottom: 20px;">Redpool <span style="color: #ff146f;">Spécial</span></h1>
        <p style="font-size: 1.2rem; color: #ccc; max-width: 700px; margin: 0 auto 40px;">Une collection exclusive alliant la force du rouge et la douceur de nos créations artisanales.</p>
    </section>

    <section class="products" style="background: #1a1a1a; padding: 4rem 5%;">
        <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
            <!-- Authentic Redpool Donut -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #ff146f; border-radius: 20px; padding: 2rem;">
                <div class="product-img-container" style="height: 250px; overflow: hidden; border-radius: 15px; margin-bottom: 1.5rem;">
                    <img src="{{ asset('images/redpool.png') }}" alt="Redpool Special" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 style="color: white; font-size: 1.5rem; margin-bottom: 10px;">Authentic Redpool Donut</h3>
                    <p style="color: #bbb; margin-bottom: 20px;">Un glaçage riche au chocolat avec une touche de velours rouge.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span style="color: #ff146f; font-weight: 800; font-size: 1.6rem;">35 DH</span>
                        <button class="btn-add" onclick="addToCart(100, 'Redpool Donut', 35, '{{ asset('images/redpool.png') }}')" style="background: #ff146f; color: white;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <!-- Premium Chocolate Waffle -->
            <div class="product-card" style="background: #2d2d2d; border: 2px solid #8a2be2; border-radius: 20px; padding: 2rem;">
                <div class="product-img-container" style="height: 250px; overflow: hidden; border-radius: 15px; margin-bottom: 1.5rem;">
                    <img src="{{ asset('images/chocolate_waffle.png') }}" alt="Chocolate Waffle" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info">
                    <h3 style="color: white; font-size: 1.5rem; margin-bottom: 10px;">Premium Chocolate Waffle</h3>
                    <p style="color: #bbb; margin-bottom: 20px;">Gaufre au chocolat belge avec sauce chocolatée et fruits frais.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                        <span style="color: #8a2be2; font-weight: 800; font-size: 1.6rem;">30 DH</span>
                        <button class="btn-add" onclick="addToCart(101, 'Chocolate Waffle', 30, '{{ asset('images/chocolate_waffle.png') }}')" style="background: #8a2be2; color: white;"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
