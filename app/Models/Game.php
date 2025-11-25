<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'system',
        'published',
        'image_url'   // ← Add this
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}