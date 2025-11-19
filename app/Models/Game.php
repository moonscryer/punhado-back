<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = false; // because we're using text timestamps

    protected $fillable = ['name', 'description', 'system'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}