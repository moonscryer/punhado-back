<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'player',
        'image',
        'description',
        'game_id',
        'published'   // ← Add this so you can mass-assign it
    ];

    protected $casts = [
        'published' => 'boolean',   // ← Converts 0/1 to true/false
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}