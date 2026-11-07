<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Kopi Arabika 200g', 'category' => 'Minuman', 'price' => 45000, 'stock' => 12, 'received_at' => '2026-10-05', 'is_active' => true, 'description' => 'Biji kopi sangrai medium', 'weight_gram' => 200],
            ['name' => 'Keripik Singkong Balado', 'category' => 'Makanan Ringan', 'price' => 15000, 'stock' => 30, 'received_at' => '2026-10-12', 'is_active' => true, 'description' => null, 'weight_gram' => 150],
            ['name' => 'Buku Tulis 58 Lembar', 'category' => 'Alat Tulis', 'price' => 5000, 'stock' => 0, 'received_at' => '2026-09-28', 'is_active' => false, 'description' => 'Isi 10 buku per pak', 'weight_gram' => 300],
            ['name' => 'Teh Kotak Sosro', 'category' => 'Minuman', 'price' => 4000, 'stock' => 50, 'received_at' => '2026-10-01', 'is_active' => true, 'description' => 'Teh melati kotak', 'weight_gram' => 300],
            ['name' => 'Susu UHT Full Cream', 'category' => 'Minuman', 'price' => 18000, 'stock' => 15, 'received_at' => '2026-10-02', 'is_active' => true, 'description' => 'Susu segar cair', 'weight_gram' => 1000],
            ['name' => 'Cokelat Silverqueen', 'category' => 'Makanan Ringan', 'price' => 22000, 'stock' => 25, 'received_at' => '2026-10-03', 'is_active' => true, 'description' => 'Cokelat kacang mete', 'weight_gram' => 62],
            ['name' => 'Biskuit Roma Kelapa', 'category' => 'Makanan Ringan', 'price' => 11000, 'stock' => 40, 'received_at' => '2026-10-04', 'is_active' => true, 'description' => 'Biskuit rasa kelapa gurih', 'weight_gram' => 300],
            ['name' => 'Pensil 2B Castell', 'category' => 'Alat Tulis', 'price' => 6000, 'stock' => 100, 'received_at' => '2026-09-30', 'is_active' => true, 'description' => 'Cocok untuk ujian', 'weight_gram' => 10],
            ['name' => 'Penghapus Joyko', 'category' => 'Alat Tulis', 'price' => 3000, 'stock' => 80, 'received_at' => '2026-09-29', 'is_active' => true, 'description' => 'Penghapus hitam', 'weight_gram' => 15],
            ['name' => 'Pulpen Gel Hitam', 'category' => 'Alat Tulis', 'price' => 7000, 'stock' => 0, 'received_at' => '2026-10-06', 'is_active' => false, 'description' => 'Tinta cepat kering', 'weight_gram' => 12],
            ['name' => 'Air Mineral 600ml', 'category' => 'Minuman', 'price' => 3500, 'stock' => 200, 'received_at' => '2026-10-07', 'is_active' => true, 'description' => 'Air mineral segar', 'weight_gram' => 600],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
