<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'player', 'image', 'description', 'game_id'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}