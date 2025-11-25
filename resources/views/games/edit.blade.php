@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Game</h1>

    <a href="{{ route('games.index') }}" class="inline-flex items-center mb-4 px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-sm hover:bg-gray-200 transition">
        &larr; Back to Games
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

    <form action="{{ route('games.update', $game->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name', $game->name) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">System</label>
            <input type="text" name="system" value="{{ old('system', $game->system) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $game->description) }}</textarea>
        </div>
        <div>
            <label class="block text-gray-700">Image URL</label>
            <input type="text" name="image_url" value="{{ old('image_url', $game->image_url) }}" class="w-full border rounded px-3 py-2" placeholder="https://example.com/image.jpg">
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="published" value="1" {{ old('published', $game->published) ? 'checked' : '' }}>
            <label class="text-gray-700">Published</label>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update Game</button>
    </form>
</div>
@endsection
