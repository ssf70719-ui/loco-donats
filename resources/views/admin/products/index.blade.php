@extends('layouts.app')

@section('content')
<div style="padding: 120px 5% 50px; background: #1a1a1a; color: white; min-height: 100vh;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1 style="font-family: var(--font-serif); color: var(--primary-pink); font-size: 2.5rem;">Tableau de Bord - Menu</h1>
            <a href="{{ route('admin.products.create') }}" style="background: var(--primary-pink); color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold;"><i class="fa-solid fa-plus"></i> Ajouter Produit</a>
        </div>

        @if(session('success'))
            <div style="background: rgba(46, 204, 113, 0.2); border-left: 4px solid #2ecc71; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

        <div style="background: #2d2d2d; border-radius: 15px; overflow: hidden; border: 1px solid #8a2be2;">
            <table style="width: 100%; text-align: left; border-collapse: collapse;">
                <thead>
                    <tr style="background: rgba(138, 43, 226, 0.2); border-bottom: 1px solid #8a2be2;">
                        <th style="padding: 15px;">Image</th>
                        <th style="padding: 15px;">Nom</th>
                        <th style="padding: 15px;">Catégorie</th>
                        <th style="padding: 15px;">Prix</th>
                        <th style="padding: 15px;">Badge</th>
                        <th style="padding: 15px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                        <td style="padding: 15px;">
                            <img src="{{ Str::startsWith($product->image_url, 'http') ? $product->image_url : asset($product->image_url) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 10px;">
                        </td>
                        <td style="padding: 15px; font-weight: bold;">{{ $product->name }}</td>
                        <td style="padding: 15px; text-transform: capitalize;">{{ $product->category }}</td>
                        <td style="padding: 15px; color: var(--primary-pink);">{{ $product->price }} DH</td>
                        <td style="padding: 15px;">{{ $product->badge ?? '-' }}</td>
                        <td style="padding: 15px; display: flex; gap: 10px;">
                            <a href="{{ route('admin.products.edit', $product) }}" style="color: #3498db; background: rgba(52, 152, 219, 0.2); padding: 8px 12px; border-radius: 5px; text-decoration: none;"><i class="fa-solid fa-edit"></i></a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: #e74c3c; background: rgba(231, 76, 60, 0.2); border: none; padding: 8px 12px; border-radius: 5px; cursor: pointer;"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if($products->isEmpty())
                <div style="padding: 30px; text-align: center; color: #bbb;">Aucun produit trouvé. Ajoutez-en un !</div>
            @endif
        </div>
    </div>
</div>
@endsection
