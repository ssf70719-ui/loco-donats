@extends('layouts.app')

@section('content')
<div style="padding: 120px 5% 50px; background: #1a1a1a; color: white; min-height: 100vh;">
    <div style="max-width: 800px; margin: 0 auto; background: #2d2d2d; border: 1px solid #8a2be2; border-radius: 15px; padding: 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1 style="font-family: var(--font-serif); color: var(--primary-pink); font-size: 2rem;">Ajouter un Produit</h1>
            <a href="{{ route('admin.products.index') }}" style="color: #bbb; text-decoration: none;"><i class="fa-solid fa-arrow-left"></i> Retour</a>
        </div>

        @if ($errors->any())
            <div style="background: rgba(231, 76, 60, 0.2); border-left: 4px solid #e74c3c; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
            @csrf
            
            <div>
                <label style="display: block; margin-bottom: 5px; color: #e0b0ff;">Nom du produit *</label>
                <input type="text" name="name" required value="{{ old('name') }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(138,43,226,0.5); background: rgba(0,0,0,0.2); color: white;">
            </div>

            <div>
                <label style="display: block; margin-bottom: 5px; color: #e0b0ff;">Catégorie *</label>
                <select name="category" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(138,43,226,0.5); background: rgba(0,0,0,0.2); color: white;">
                    <option value="donuts">Donuts</option>
                    <option value="waffles">Gaufres</option>
                    <option value="croissants">Croissants</option>
                    <option value="drinks">Boissons Froides</option>
                    <option value="energy">Boissons Énergisantes</option>
                </select>
            </div>

            <div>
                <label style="display: block; margin-bottom: 5px; color: #e0b0ff;">Description</label>
                <textarea name="description" rows="3" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(138,43,226,0.5); background: rgba(0,0,0,0.2); color: white;">{{ old('description') }}</textarea>
            </div>

            <div style="display: flex; gap: 1rem;">
                <div style="flex: 1;">
                    <label style="display: block; margin-bottom: 5px; color: #e0b0ff;">Prix (DH) *</label>
                    <input type="number" step="0.01" name="price" required value="{{ old('price') }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(138,43,226,0.5); background: rgba(0,0,0,0.2); color: white;">
                </div>
                <div style="flex: 1;">
                    <label style="display: block; margin-bottom: 5px; color: #e0b0ff;">Badge (Optionnel, ex: Premium, Nouveau)</label>
                    <input type="text" name="badge" value="{{ old('badge') }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(138,43,226,0.5); background: rgba(0,0,0,0.2); color: white;">
                </div>
            </div>

            <div>
                <label style="display: block; margin-bottom: 5px; color: #e0b0ff;">URL de l'image * (lien http://... ou chemin local images/...)</label>
                <input type="text" name="image_url" required value="{{ old('image_url') }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(138,43,226,0.5); background: rgba(0,0,0,0.2); color: white;">
            </div>

            <button type="submit" style="background: linear-gradient(135deg, var(--primary-pink), #8a2be2); color: white; border: none; padding: 12px; border-radius: 25px; font-weight: bold; cursor: pointer; font-size: 1.1rem; margin-top: 1rem;">Sauvegarder le Produit</button>
        </form>
    </div>
</div>
@endsection
