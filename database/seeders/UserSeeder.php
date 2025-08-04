<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Tegar Bramasta',
            'phone' => '081234567890',
            'email' => 'tegar@gmail.com',
            'password' => Hash::make('password123'), // password: "password123"
            'created_at' => now(),
            'updated_at' => now(),

            'name' => 'Faruq',
            'phone' => '081234567890',
            'email' => 'faruq@gmail.com',
            'password' => Hash::make('password123'), // password: "password123"
            'created_at' => now(),
            'updated_at' => now(),

            'name' => 'maul',
            'phone' => '081234567890',
            'email' => 'maul@gmail.com',
            'password' => Hash::make('password123'), // password: "password123"
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
