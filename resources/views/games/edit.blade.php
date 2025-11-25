@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Game</h1>

    <form action="{{ route('games.update', $game) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $game->name) }}" class="w-full border rounded px-3 py-2" required>
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700">System</label>
            <input type="text" name="system" value="{{ old('system', $game->system) }}" class="w-full border rounded px-3 py-2" required>
            @error('system') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $game->description) }}</textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="published" value="1" {{ old('published', $game->published) ? 'checked' : '' }}>
            <label class="text-gray-700">Published</label>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update Game</button>
    </form>
</div>
@endsection