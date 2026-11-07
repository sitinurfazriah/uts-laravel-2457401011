<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Jalur Halaman Beranda Utama
Route::get('/', function () {
    return view('welcome');
});

// Jalur Otomatis 7 Fungsi CRUD Produk
Route::resource('products', ProductController::class);
