<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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
