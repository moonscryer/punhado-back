<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;

class CharacterApiController extends Controller
{
    public function index()
    {
        // Only published characters
        $characters = Character::where('published', true)->get();

        return response()->json($characters);
    }

    public function show(Character $character)
    {
        if (! $character->published) {
            return response()->json(['message' => 'Character not found'], 404);
        }

        return response()->json($character);
    }
}
