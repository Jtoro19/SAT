<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gabriel',
            'email' => 'gabgarciaga@unal.edu.co',
            'address' => 'Calle 55',
            'password' => Hash::make('password'),
            'phoneNumber' => 1234567890,
            'roleID' => 1
        ]);

        User::create([
            'name' => 'Ana Carolina',
            'email' => 'ahenaovi@unal.edu.co',
            'address' => 'Carrera 66',
            'password' => Hash::make('password'),
            'phoneNumber' => 2345678901,
            'roleID' => 1
        ]);

        User::create([
            'name' => 'Juan Camilo',
            'email' => 'jutorop@unal.edu.co',
            'address' => 'Calle 45B',
            'password' => Hash::make('password'),
            'phoneNumber' => 3456789012,
            'roleID' => 2
        ]);

        User::create([
            'name' => 'Juan Perez',
            'email' => 'juanito@example.com',
            'address' => 'carreara 16A',
            'password' => Hash::make('password'),
            'phoneNumber' => 4567890123,
            'roleID' => 3 
        ]);

        User::create([
            'name' => 'Pepito Perez',
            'email' => 'pepito@example.com',
            'address' => 'carrera 23',
            'password' => Hash::make('password'),
            'phoneNumber' => 5678901234,
            'roleID' => 3 
        ]);
    }
}
