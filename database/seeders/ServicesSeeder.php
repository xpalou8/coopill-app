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
        Service::create(['name' => 'Podar abres', 'description' => 'Tear les branques dels abres', 'price_hour' => '20', 'img' => 'tomatiguera.jpg']);
        Service::create(['name' => 'Plantar plantes', 'description' => 'Es plantaran totes les plantes que se haguin demanat','price_hour' => '19.99', 'img' => 'orquidea.jpg']);
        Service::create(['name' => 'Tallar mala herbe', 'description' => 'Se rebasara tota la mala herba del jardi', 'price_hour' => '15', 'img' => 'amapola.png']);
        Service::create(['name' => 'Fertilización', 'description' => 'Aplicación de fertilizantes para promover el crecimiento saludable de las plantas', 'price_hour' => '25', 'img' => 'naranjo.jpg']);
        Service::create(['name' => 'Instalación de sistemas de riego', 'description' => 'Instalación de sistemas de riego automático para mantener las plantas adecuadamente hidratadas', 'price_hour' => '30', 'img' => 'lavanda.jpg']);
        Service::create(['name' => 'Control de plagas', 'description' => 'Tratamiento y control de plagas para proteger las plantas de enfermedades y daños', 'price_hour' => '35', 'img' => 'girasol.jpg']);

    }
}
