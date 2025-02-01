<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'roleName' => 'Admin',
            'label' => 'Administrator',
            'description' => 'Full access to the system',
            'able' => true
        ]);

        Role::create([
            'roleName' => 'Employee',
            'label' => 'Employee',
            'description' => 'does manteinance to the stations',
            'able' => true
        ]);

        Role::create([
            'roleName' => 'Viewer',
            'label' => 'Content Viewer',
            'description' => 'Receive alerts',
            'able' => true
        ]);
    }
}
