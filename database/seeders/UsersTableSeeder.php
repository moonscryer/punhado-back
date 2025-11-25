<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['username' => 'admin', 'email' => 'admin@example.com', 'password' => 'pass123', 'super_user' => true],
            ['username' => 'lisa', 'email' => 'lisa@example.com', 'password' => 'secret', 'super_user' => false],
            ['username' => 'mark', 'email' => 'mark@example.com', 'password' => 'secret', 'super_user' => false],
            ['username' => 'john', 'email' => 'john@example.com', 'password' => 'secret', 'super_user' => false],
            ['username' => 'sara', 'email' => 'sara@example.com', 'password' => 'secret', 'super_user' => false],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}