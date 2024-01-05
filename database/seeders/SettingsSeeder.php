<?php

namespace Database\Seeders;

use App\Models\SettingsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SettingsModel::create([
            'valor_fixo' => 15,
            'valor_avulso' => 15,
        ]);
    }
}
