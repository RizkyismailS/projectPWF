<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'nama_perusahaan',
        'email',
        'password',
        'phone',
        'address',
        'profile_picture',
        'type'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
}

