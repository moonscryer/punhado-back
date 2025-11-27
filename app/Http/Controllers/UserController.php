<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Helper to check if current user is super_user
    private function authorizeSuperUser()
    {
        if (!auth()->user()->super_user) {
            abort(403, 'Unauthorized.');
        }
    }

    public function index()
    {
        $this->authorizeSuperUser();

        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $this->authorizeSuperUser();

        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->authorizeSuperUser();

        $request->validate([
            'username' => 'required|string|max:100|unique:users,username',
            'email' => 'required|string|email|max:150|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'super_user' => 'sometimes|boolean',
        ]);

        User::create([
            'username' => $request->username,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'super_user' => $request->has('super_user') ? 1 : 0,
        ]);

        return redirect()->route('users.index')->with('success', 'User created.');
    }

    public function edit(User $user)
    {
        $this->authorizeSuperUser();

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorizeSuperUser();

        $request->validate([
            'username' => 'required|string|max:100|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:150|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'super_user' => 'sometimes|boolean',
        ]);

        $user->username = $request->username;
        $user->email = strtolower($request->email);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->super_user = $request->has('super_user') ? 1 : 0;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated.');
    }

    public function destroy(User $user)
    {
        $this->authorizeSuperUser();

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted.');
    }

    public function toggleSuper(User $user)
    {
        $this->authorizeSuperUser();

        $user->super_user = !$user->super_user;
        $user->save();

        return redirect()->route('users.index')->with('success', 'Super user status updated.');
    }
}
