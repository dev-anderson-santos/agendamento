<?php

namespace Database\Seeders;

use App\Models\RoomModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomModel::create(['name' => 'Sala 101']);
        RoomModel::create(['name' => 'Sala 102']);
    }
}
