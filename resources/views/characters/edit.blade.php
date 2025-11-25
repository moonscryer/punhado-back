@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Character</h1>

    <a href="{{ route('characters.index') }}" class="inline-flex items-center mb-4 px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-sm hover:bg-gray-200 transition">
        &larr; Back to Characters
    </a>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-lg">
            <h2 class="font-bold mb-2">Please fix the following errors:</h2>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('characters.update', $character) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $character->name) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Player</label>
            <input type="text" name="player" value="{{ old('player', $character->player) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Game</label>
            <select name="game_id" class="w-full border rounded px-3 py-2" required>
                @foreach($games as $game)
                    <option value="{{ $game->id }}" {{ old('game_id', $character->game_id) == $game->id ? 'selected' : '' }}>{{ $game->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $character->description) }}</textarea>
        </div>
        <div>
            <label class="block text-gray-700">Image URL</label>
            <input type="text" name="image" value="{{ old('image', $character->image) }}" class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="published" value="1" {{ old('published', $character->published) ? 'checked' : '' }}>
            <label class="text-gray-700">Published</label>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update Character</button>
    </form>
</div>
@endsection