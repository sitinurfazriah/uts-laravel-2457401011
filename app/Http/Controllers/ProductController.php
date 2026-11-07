<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. Menampilkan semua data ke tabel
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // 2. Menampilkan form tambah produk baru
    public function create() {
        return view('products.create');
    }

    // 3. Menyimpan data dari form tambah ke database
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Minuman,Makanan Ringan,Alat Tulis',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'received_at' => 'required|date',
            'weight_gram' => 'nullable|integer|min:0',
            'description' => 'nullable|string'
        ]);

        $validated['is_active'] = $request->has('is_active') ? true : false;

        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // 4. Menampilkan detail lengkap dari satu produk
    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    // 5. Menampilkan form untuk mengubah/mengedit data lama
    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    // 6. Memperbarui data yang telah diedit ke database
    public function update(Request $request, Product $product) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:Minuman,Makanan Ringan,Alat Tulis',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'received_at' => 'required|date',
            'weight_gram' => 'nullable|integer|min:0',
            'description' => 'nullable|string'
        ]);

        $validated['is_active'] = $request->has('is_active') ? true : false;

        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // 7. Menghapus produk dari database
    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
