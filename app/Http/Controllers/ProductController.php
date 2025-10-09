<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.produk', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.produk_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'name' => 'required|string|max:255',
            'size' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'size' => $request->size,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('produks.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $produk)
    {
        return view('dashboard.produk_edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $produk)
    {
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'name' => 'required|string|max:255',
            'size' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($produk->image && Storage::disk('public')->exists($produk->image)) {
                Storage::disk('public')->delete($produk->image);
            }
            $imagePath = $request->file('image')->store('products', 'public');
            $produk->image = $imagePath;
        }

        $produk->name = $request->name;
        $produk->size = $request->size;
        $produk->price = $request->price;

        $produk->save();

        return redirect()->route('produks.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $produk)
    {
        if ($produk->image && Storage::disk('public')->exists($produk->image)) {
            Storage::disk('public')->delete($produk->image);
        }
        $produk->delete();

        return redirect()->route('produks.index')->with('success', 'Product deleted successfully.');
    }
}
