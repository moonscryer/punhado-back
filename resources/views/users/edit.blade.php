@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit User</h1>

    <a href="{{ route('users.index') }}" class="inline-flex items-center mb-4 px-4 py-2 bg-gray-100 text-gray-800 font-medium rounded-lg shadow-sm hover:bg-gray-200 transition">
        &larr; Back to Users
    </a>

    <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-gray-700">Username</label>
            <input type="text" name="username" value="{{ $user->username }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block text-gray-700">Password (leave blank to keep current)</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <div>
            <label class="block text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex items-center gap-2">
            <input type="checkbox" name="super_user" value="1" {{ $user->super_user ? 'checked' : '' }}>
            <label class="text-gray-700">Super User</label>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Update User</button>
    </form>
</div>
@endsection