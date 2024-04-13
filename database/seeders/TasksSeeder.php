<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(['description' => 'Task 1', 'status' => 'pending']);
        Task::create(['description' => 'Task 2', 'status' => 'completed']);
        Task::create(['description' => 'Task 3', 'status' => 'pending']);
    }
}
