<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharactersTableSeeder extends Seeder
{
    public function run()
    {
        $characters = [
            ['name' => 'Arion Stormblade', 'player' => 'Lisa', 'image' => null, 'description' => 'Brave knight of Etheria.', 'game_id' => 1, 'published' => true],
            ['name' => 'ZeroShift', 'player' => 'Mark', 'image' => null, 'description' => 'Elite hacker in the megacity.', 'game_id' => 2, 'published' => true],
            ['name' => 'Captain Lyria Vox', 'player' => 'John', 'image' => null, 'description' => 'Starship commander.', 'game_id' => 3, 'published' => false],
            ['name' => 'Feylin Moonwhisper', 'player' => 'Sara', 'image' => null, 'description' => 'Elven druid of the wilds.', 'game_id' => 4, 'published' => true],
            ['name' => 'Ryo Takamoto', 'player' => 'Lisa', 'image' => null, 'description' => 'Shadow operative in Kyoto.', 'game_id' => 5, 'published' => false],
        ];

        foreach ($characters as $char) {
            Character::create($char);
        }
    }
}