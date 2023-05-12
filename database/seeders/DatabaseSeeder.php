<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Isra Mosaad',
            'email' => 'isra@example.com',
            'password' => bcrypt('password'),
            'age' => 21,
            'gender' => 'F',
        ]);

        \App\Models\User::create([
            'name' => 'Abdelrahman Eid',
            'email' => 'abdo@example.com',
            'password' => bcrypt('password'),
            'age' => 21,
            'gender' => 'M',
        ]);

        \App\Models\User::create([
            'name' => 'Dr. Evil',
            'email' => 'dr.evil@example.com',
            'password' => bcrypt('password'),
            'age' => 100,
            'gender' => 'M',
        ]);

        \App\Models\User::create([
            'name' => 'Patient Demo',
            'email' => 'patient@example.com',
            'password' => bcrypt('password'),
            'age' => 80,
            'gender' => 'F',
        ]);
    }
}
