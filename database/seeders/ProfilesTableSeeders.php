<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Andrea',
            'lastname' => 'Saldaña',
            'email' => 'andrea.saldana@alumnos.ucn.cl',
            'city' => 'Santiago',
            'country' => 'Chile',
            'summary' => 'Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN.',
            ]);
    }
}
