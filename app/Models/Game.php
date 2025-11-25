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
        'published'  // ← Add this
    ];

    protected $casts = [
        'published' => 'boolean',   // ← Converts to true/false
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}