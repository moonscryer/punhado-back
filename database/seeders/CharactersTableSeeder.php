<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('characters')->insert([
            [
                'name' => 'Thorin Oakshield',
                'player' => 'Alice',
                'image' => null,
                'description' => 'Dwarf warrior',
                'game_id' => 1, // Epic Adventure
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lyra Starwind',
                'player' => 'Bob',
                'image' => null,
                'description' => 'Elf wizard',
                'game_id' => 1, // Epic Adventure
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Captain Nova',
                'player' => 'Alice',
                'image' => null,
                'description' => 'Space captain',
                'game_id' => 2, // Space Odyssey
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}