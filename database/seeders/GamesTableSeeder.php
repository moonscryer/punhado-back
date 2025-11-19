<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'name' => 'Epic Adventure',
                'description' => 'A grand fantasy quest.',
                'system' => 'D&D 5e',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Space Odyssey',
                'description' => 'Sci-fi exploration game.',
                'system' => 'Starfinder',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}