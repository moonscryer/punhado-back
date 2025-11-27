<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = $this->command->ask('Super user email');
        $password = $this->command->secret('Super user password');
        $name = $this->command->ask('Super user name', 'Admin');

        User::create([
            'username' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'super_user' => true, // if you have this column
        ]);

        $this->command->info('Super user created successfully!');
    }
}
