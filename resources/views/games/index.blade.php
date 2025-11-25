@extends('layouts.app')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Games Management</h1>
    <a href="{{ route('games.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Add New Game</a>
</div>

@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
@endif

<div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">System</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Characters</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($games as $game)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $game->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $game->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $game->system }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="{{ route('games.toggle', $game) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" 
                                    class="px-2 py-1 rounded-full text-white {{ $game->published ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600' }}">
                                {{ $game->published ? 'Yes' : 'No' }}
                            </button>
                        </form>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $game->characters->count() }}</td>
                    <td class="px-6 py-4 whitespace-nowrap space-x-2">
                        <a href="{{ route('games.edit', $game) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <form action="{{ route('games.destroy', $game) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this game?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection