<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $keyType = 'int';

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
}