<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(['name' => 'Podar abres', 'description' => 'Tear les branques dels abres', 'price_hour' => '20']);
        Service::create(['name' => 'Plantar plantes', 'description' => 'Es plantaran totes les plantes que se haguin demanat','price_hour' => '19.99']);
        Service::create(['name' => 'Tallar mala herbe', 'description' => 'Se rebasara tota la mala herba del jardi', 'price_hour' => '15']);
    }
}
