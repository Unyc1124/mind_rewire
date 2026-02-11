<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StoryCard;

class StoryCardSeeder extends Seeder
{
    public function run(): void
    {
        $json = file_get_contents(database_path('data/stories.json'));
        $stories = json_decode($json, true);

        foreach ($stories as $story) {
            StoryCard::create($story);
        }
    }
}
