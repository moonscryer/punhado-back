<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class DashboardController extends Controller
{
    public function index()
    {
        // Load all games with their characters
        $games = Game::with('characters')->get();

        return view('dashboard', compact('games'));
    }
}