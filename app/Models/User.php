<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        // 'type',
        // 'phone',
        // 'address',
        // 'profile_picture',
        // 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
