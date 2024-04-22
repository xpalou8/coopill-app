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
        Plant::create(['name' => 'Tomatiguera', 'description' => 'Entre agost i octubre', 'price_per_lot' => '7.25', 'img' => 'tomatiguera.jpg']);
        Plant::create(['name' => 'Taronger', 'description' => 'Entre octubre i Junio','price_per_lot' => '40','img' => 'naranjo.jpg']);
        Plant::create(['name' => 'Amapola', 'description' => 'Abril i Septempre', 'price_per_lot' => '5','img' => 'amapola.png']);
        Plant::create(['name' => 'Orquídea', 'description' => 'Florece en primavera', 'price_per_lot' => '12.99', 'img' => 'orquidea.jpg']);
        Plant::create(['name' => 'Lavanda', 'description' => 'Aroma relajante', 'price_per_lot' => '8.50', 'img' => 'lavanda.jpg']);
        Plant::create(['name' => 'Girasol', 'description' => 'Flores amarillas brillantes', 'price_per_lot' => '3.75', 'img' => 'girasol.jpg']);

    }
}
