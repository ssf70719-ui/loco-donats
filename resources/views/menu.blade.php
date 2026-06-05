@extends('layouts.app')

@section('content')

    <!-- Spacer for fixed header -->
    <div style="height: 100px; background: #1a1a1a;"></div>

    @php
        $categories = [
            'donuts' => [
                'title' => 'Nos Meilleures Ventes',
                'subtitle' => 'Découvrez notre irrésistible sélection de saveurs.',
                'title_color' => 'var(--primary-pink)',
                'bg' => 'linear-gradient(135deg, #1a1a1a 0%, #2a1a3a 50%, #1a1a1a 100%)'
            ],
            'waffles' => [
                'title' => 'special gaufres',
                'subtitle' => 'Nos créations artisanales préparées avec passion',
                'title_color' => '#8a2be2',
                'bg' => '#1a1a1a'
            ],
            'croissants' => [
                'title' => 'special croissants',
                'subtitle' => 'Viennoiseries artisanales croustillantes et fondantes',
                'title_color' => 'var(--primary-pink)',
                'bg' => 'linear-gradient(135deg, #1a1a1a 0%, #2a1a3a 50%, #1a1a1a 100%)'
            ],
            'drinks' => [
                'title' => 'Nos Boissons',
                'subtitle' => 'Rafraîchissez-vous avec nos spécialités.',
                'title_color' => '#8a2be2',
                'bg' => '#1a1a1a'
            ],
            'energy' => [
                'title' => 'Boissons Énergisantes',
                'subtitle' => 'Pour un coup de boost immédiat.',
                'title_color' => 'var(--primary-pink)',
                'bg' => 'linear-gradient(135deg, #1a1a1a 0%, #3d1a3a 50%, #1a1a1a 100%)'
            ]
        ];
    @endphp

    @foreach($categories as $categoryKey => $catData)
        <section class="products" id="{{ $categoryKey }}" style="background: {{ $catData['bg'] }}; padding: 4rem 5%; color: white;">
            <h2 class="section-title" style="color: {{ $catData['title_color'] }}; text-align: center; font-family: var(--font-serif); margin-bottom: 10px; text-transform: {{ $categoryKey == 'waffles' || $categoryKey == 'croissants' ? 'lowercase' : 'none' }};">{{ $catData['title'] }}</h2>
            <p class="section-subtitle" style="text-align: center; color: #e0b0ff; margin-bottom: 40px; font-size: 16px;">{{ $catData['subtitle'] }}</p>

            <div class="product-grid">
                @foreach($products->where('category', $categoryKey) as $product)
                    <div class="product-card" style="background: #2d2d2d; border: 2px solid {{ $loop->iteration % 2 == 0 ? '#8a2be2' : 'var(--primary-pink)' }}; border-radius: 20px; padding: 1.5rem; transition: var(--transition); box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                        <div class="product-img-container" style="position: relative; height: 180px; overflow: hidden; border-radius: 15px; margin-bottom: 1rem; background: rgba(0,0,0,0.2);">
                            <img src="{{ Str::startsWith($product->image_url, 'http') ? $product->image_url : asset($product->image_url) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            @if($product->badge)
                                <div style="position: absolute; top: 10px; right: 10px; background: {{ $loop->iteration % 2 == 0 ? '#8a2be2' : 'var(--primary-pink)' }}; color: white; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.4);">
                                    {{ $product->badge }}
                                </div>
                            @endif
                        </div>
                        <div class="product-info" style="text-align: center;">
                            <h3 class="product-title" style="color: white; font-size: 1.3rem; margin-bottom: 5px; font-weight: 600;">{{ $product->name }}</h3>
                            <p class="product-desc" style="color: #bbb; font-size: 0.9rem; line-height: 1.4; margin-bottom: 15px; min-height: 40px;">{{ $product->description }}</p>
                            <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
                                <span class="product-price" style="color: {{ $loop->iteration % 2 == 0 ? '#8a2be2' : 'var(--primary-pink)' }}; font-weight: 800; font-size: 1.4rem;">{{ $product->price }} DH</span>
                                <button class="btn-add" onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ Str::startsWith($product->image_url, 'http') ? $product->image_url : asset($product->image_url) }}')" style="background: linear-gradient(135deg, {{ $loop->iteration % 2 == 0 ? '#8a2be2, var(--primary-pink)' : 'var(--primary-pink), #8a2be2' }}); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; transition: all 0.3s ease;"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($products->where('category', $categoryKey)->isEmpty())
                <p style="text-align: center; color: #bbb; font-style: italic;">Aucun produit dans cette catégorie pour le moment.</p>
            @endif
        </section>
    @endforeach

@endsection
