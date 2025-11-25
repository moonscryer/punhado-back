<?php

// THIS HAS NO AUTH YET!

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'password',
        'super_user',   // NEW FIELD
    ];

    protected $casts = [
        'super_user' => 'boolean',  // NEW CAST
    ];
}