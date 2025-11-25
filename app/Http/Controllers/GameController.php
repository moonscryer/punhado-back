<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with('characters')
                     ->orderBy('id', 'desc')
                     ->paginate(10);

        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'system' => 'required|string|max:100',
            'description' => 'nullable|string',
            'published' => 'boolean',
            'image_url' => 'nullable|url|max:255', // ← Added
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')->with('success', 'Game created.');
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'system' => 'required|string|max:100',
            'description' => 'nullable|string',
            'published' => 'boolean',
            'image_url' => 'nullable|url|max:255', // ← Added
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')->with('success', 'Game updated.');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game deleted.');
    }

    public function togglePublished(Game $game)
    {
        $game->published = !$game->published;
        $game->save();

        return redirect()->route('games.index')->with('success', 'Game publish status updated.');
    }
}
