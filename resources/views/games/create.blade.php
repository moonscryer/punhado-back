@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Add New Game</h1>
<a href="{{ route('games.index') }}" 
   class="inline-flex items-center mb-4 px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-sm hover:bg-gray-200 transition">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
    </svg>
    Back to Games
</a>
    <form action="{{ route('games.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2" required>
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700">System</label>
            <input type="text" name="system" value="{{ old('system') }}" class="w-full border rounded px-3 py-2" required>
            @error('system') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="published" value="1" {{ old('published') ? 'checked' : '' }}>
            <label class="text-gray-700">Published</label>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Create Game</button>
    </form>
</div>
@endsection