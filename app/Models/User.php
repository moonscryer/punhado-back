<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable; // ← Add HasApiTokens here

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_super'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'is_super' => 'boolean',
    ];
}
