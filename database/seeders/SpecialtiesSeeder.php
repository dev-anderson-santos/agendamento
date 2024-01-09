<?php

namespace Database\Seeders;

use App\Models\SpecialtiesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialtiesData = [
            'Psicólogo',
            'Psicopedagogo',
            'Fonoaudiólogo',
            'Fisioterapeuta',
            'Terapeuta Ocupacional',
            'Neurologista',
            'Psiquiatra',
            'Ortopedista',
            'Fonoaudiólogo Pediátrico',
            'Fonoaudiólogo Educacional',
            'Psicólogo Clínico',
            'Pediatra',
            'Psicólogo Infantil',
            'Fonoaudiólogo Infantil',
            'Terapeuta Ocupacional Infantil',
            // Adicione mais especialidades conforme necessário
        ];

        foreach ($specialtiesData as $specialtyName) {
            SpecialtiesModel::create(['name' => $specialtyName]);
        }
    }
}
