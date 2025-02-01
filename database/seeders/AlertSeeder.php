<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alert;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            Alert::create([
                'reportID' => rand(1, 10),
                'type' => rand(1, 3),
                'alertIntensity' => rand(1, 10)
            ]);
        }
    }
}
