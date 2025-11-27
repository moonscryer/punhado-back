<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GameApiController extends Controller
{
    public function index()
    {
        // Only send published games
        $games = Game::where('published', true)->get();

        return response()->json($games);
    }

    public function show(Game $game)
    {
        // Only allow viewing published games
        if (! $game->published) {
            return response()->json(['message' => 'Game not found'], 404);
        }

        return response()->json($game);
    }
}
