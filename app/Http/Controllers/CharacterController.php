<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Game;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
    $characters = Character::with('game')
                           ->orderBy('id', 'desc')
                           ->paginate(10);

    return view('characters.index', compact('characters'));
    }

    public function create()
    {
        $games = Game::all();
        return view('characters.create', compact('games'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'player' => 'required|string|max:100',
            'image' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'game_id' => 'required|exists:games,id',
            'published' => 'sometimes|boolean',
        ]);

        Character::create($request->all());

        return redirect()->route('characters.index')->with('success', 'Character created.');
    }

    public function edit(Character $character)
    {
        $games = Game::all();
        return view('characters.edit', compact('character', 'games'));
    }

    public function update(Request $request, Character $character)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'player' => 'required|string|max:100',
            'image' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'game_id' => 'required|exists:games,id',
            'published' => 'sometimes|boolean',
        ]);

        $character->update($request->all());

        return redirect()->route('characters.index')->with('success', 'Character updated.');
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index')->with('success', 'Character deleted.');
    }

    public function togglePublished(Character $character)
    {
        $character->published = !$character->published;
        $character->save();

        return redirect()->route('characters.index')->with('success', 'Character publish status updated.');
    }
}