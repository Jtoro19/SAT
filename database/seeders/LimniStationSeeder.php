<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LimniStation;

class LimniStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            LimniStation::create([
                'stationID' => $i+5,
                'streamVolume' => rand(100, 1000) + rand(0, 99) / 100
            ]);
        }
    }
}
