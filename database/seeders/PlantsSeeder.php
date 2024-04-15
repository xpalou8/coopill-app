<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plant::create(['name' => 'Tomatiguera', 'description' => 'Entre agost i octubre', 'price_per_lot' => '7.25']);
        Plant::create(['name' => 'Taronger', 'description' => 'Entre octubre i Junio','price_per_lot' => '40']);
        Plant::create(['name' => 'Amapola', 'description' => 'Abril i Septempre', 'price_per_lot' => '5']);
    }
}
