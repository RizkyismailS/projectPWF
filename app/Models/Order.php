<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'order_code', // Menambahkan kolom untuk kode unik pesanan
        'quantity',
        'status',
        'total_price',
        'name_on_card',        // Menambahkan kolom untuk nama pada kartu
        'card_number',         // Menambahkan kolom untuk nomor kartu
        'expiration_date',     // Menambahkan kolom untuk tanggal kedaluwarsa
    ];
protected static function booted()
{
    static::creating(function ($order) {
        $order->order_code = 'ORD-' . strtoupper(Str::random(8));
    });
}
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Menambahkan relasi ke model User
    }
}
