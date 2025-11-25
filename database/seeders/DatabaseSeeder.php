<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            GamesTableSeeder::class,
            CharactersTableSeeder::class,
        ]);
    }
}