<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Anderson Barbosa dos Santos',
            'username' => 'dev.anderson',
            'email' => 'dev.anderson.santos@gmail.com',
            'password' => Hash::make('00000000'),
            'phone' => '21976662004',
            'is_admin' => '1',
            'status' => '1',
        ]);
    }
}
