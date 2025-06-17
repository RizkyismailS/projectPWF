<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $table = 'variant';
    
    protected $fillable = [
        'product_id',
        'name',
        // tambahkan field lain jika ada seperti 'price', 'stock', dsb
    ];

    // Relasi ke produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi ke banyak gambar
    public function images()
    {
        return $this->hasMany(VariantImage::class);
    }
}
