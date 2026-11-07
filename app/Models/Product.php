<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Mendaftarkan kolom agar bisa diisi data
    protected $fillable = [
        'name', 'category', 'price', 'stock', 'received_at', 'is_active', 'description', 'weight_gram'
    ];
}
