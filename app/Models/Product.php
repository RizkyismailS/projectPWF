<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'nama_produk',
        'kode_produk',
        'deskripsi_produk',
        'harga_produk',
        'stok_produk',
        'gambar_produk',
        'kategori_produk',
        'status_produk',
        'type',
        'discount'
    ];

    protected $casts = [
        'harga_produk' => 'integer',
        'stok_produk' => 'integer',
        'discount' => 'decimal:2'
    ];
}
