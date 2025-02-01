<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PluviometricStation;

class PluviometricStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            PluviometricStation::create([
                'stationID' => $i+10,
                'rainfall' => rand(0, 200) + rand(0, 99) / 100
            ]);
        }
    }
}
