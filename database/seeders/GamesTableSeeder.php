<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        $games = [
            ['name' => 'Dragons of Etheria', 'description' => 'Epic fantasy adventure.', 'system' => 'D&D 5e', 'published' => true],
            ['name' => 'Cyber Pulse', 'description' => 'Neon-drenched cyberpunk missions.', 'system' => 'Cyberpunk Red', 'published' => true],
            ['name' => 'Starbound Voyage', 'description' => 'Exploring the unknown universe.', 'system' => 'Starfinder', 'published' => false],
            ['name' => 'Mystic Realms', 'description' => 'Magic, mystery, and monsters.', 'system' => 'Pathfinder 2e', 'published' => true],
            ['name' => 'Shadows of Kyoto', 'description' => 'Feudal Japan intrigue.', 'system' => 'L5R', 'published' => false],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}