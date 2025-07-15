<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'user_id',
        'nama_produk',
        'kode_produk',
        'deskripsi_produk',
        'harga_produk',
        'stok_produk',
        'gambar_produk',
        'kategori_produk',
        'status_produk',
        'produk_state',
        'discount'
    ];

    protected $casts = [
        'harga_produk' => 'integer',
        'stok_produk' => 'integer',
        'discount' => 'decimal:2'
    ];

    // In App\Models\Product.php
public function user()
{
    return $this->belongsTo(User::class);
}
public function variant()
{
    return $this->hasMany(Variant::class);
}
public function carts()
{
    return $this->hasMany(Cart::class);
}
public function orders()
{
    return $this->hasMany(Order::class);
}
}
