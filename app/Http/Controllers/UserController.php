<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    $users = User::orderBy('id', 'desc')
                 ->paginate(10);

    return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Force lowercase before validation
        $request->merge([
            'username' => strtolower($request->username),
            'email' => strtolower($request->email),
        ]);

        // Validation
        $request->validate([
            'username' => 'required|string|max:100|unique:users',
            'email' => 'required|string|email|max:150|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'super_user' => 'sometimes|boolean',
        ]);

        // Create user
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'super_user' => $request->has('super_user') ? 1 : 0,
        ]);

        return redirect()->route('users.index')->with('success', 'User created.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Force lowercase before validation
        $request->merge([
            'username' => strtolower($request->username),
            'email' => strtolower($request->email),
        ]);

        // Validation
        $request->validate([
            'username' => 'required|string|max:100|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:150|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'super_user' => 'sometimes|boolean',
        ]);

        // Update user
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->super_user = $request->has('super_user') ? 1 : 0;

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted.');
    }

    public function toggleSuper(User $user)
    {
        $user->super_user = !$user->super_user;
        $user->save();

        return redirect()->route('users.index')->with('success', 'Super user status updated.');
    }
}
