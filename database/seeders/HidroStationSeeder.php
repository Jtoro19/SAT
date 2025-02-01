<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HidroStation;

class HidroStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            HidroStation::create([
                'stationID' => $i,
                'temperature' => rand(15, 35) + rand(0, 99) / 100,
                'humidity' => rand(30, 90) + rand(0, 99) / 100,
                'atmosphericPressure' => rand(950, 1050) + rand(0, 99) / 100
            ]);
        }
    }
}