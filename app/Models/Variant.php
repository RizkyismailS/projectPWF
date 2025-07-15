<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $table = 'variants';

    protected $fillable = [
        'product_id',
        'name',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(VariantImage::class, 'variant_id', 'id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'variant_id', 'id');
    }
}

