<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image_url' => 'required|string',
            'category' => 'required|string',
            'badge' => 'nullable|string'
        ]);

        Product::create($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Produit ajouté avec succès!');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image_url' => 'required|string',
            'category' => 'required|string',
            'badge' => 'nullable|string'
        ]);

        $product->update($request->all());
        return redirect()->route('admin.products.index')->with('success', 'Produit mis à jour!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produit supprimé!');
    }
}
