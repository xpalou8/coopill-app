<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoadMap;
use App\Models\Task;

class RoadMapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roadMap1 = RoadMap::create(['date' => '2024-04-11']);
        $roadMap2 = RoadMap::create(['date' => '2024-04-12']);

        // Attach tasks to roadmaps
        $tasks = Task::all();

        $roadMap1->tasks()->attach($tasks->random(2));
        $roadMap2->tasks()->attach($tasks->random(3));
    }
}
