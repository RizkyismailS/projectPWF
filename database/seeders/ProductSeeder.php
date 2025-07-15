<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Variant;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $product = Product::create([
                'user_id'         => 1,
                'nama_produk'     => 'Produk ' . $i,
                'kode_produk'     => 2000 + $i,
                'kategori_produk' => ['makanan', 'minuman', 'furniture'][rand(0,2)],
                'harga_produk'    => rand(10000, 100000),
                'stok_produk'     => rand(1, 100),
                'deskripsi_produk'=> 'Deskripsi produk ke-' . $i,
                'gambar_produk'   => 'default.jpg',
            ]);

            // Tambahkan 2 varian untuk setiap produk
            for ($v = 1; $v <= 2; $v++) {
                $product->variants()->create([
                    'name' => 'Varian ' . $v . ' Produk ' . $i,
                    // Tambahkan field lain sesuai kebutuhan, misal 'image_path' => 'default.jpg'
                ]);
            }
        }
    }
}