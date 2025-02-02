<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 1; $i <= 5; $i++) {
            Station::create([
                'latitude' => 40.7128 + $i,
                'longitude' => -74.0060 - $i,
                'state' => true,
                'date' => now(),
                'lastMaintenance' => now()->subDays(30),
                'StationType' => 1,
                'able' => true
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            Station::create([
                'latitude' => 34.0522 + $i,
                'longitude' => -118.2437 - $i,
                'state' => true,
                'date' => now(),
                'lastMaintenance' => now()->subDays(60),
                'StationType' => 2,
                'able' => true
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            Station::create([
                'latitude' => 51.5074 + $i,
                'longitude' => -0.1278 - $i,
                'state' => true,
                'date' => now(),
                'lastMaintenance' => now()->subDays(90),
                'StationType' => 3,
                'able' => true
            ]);
        }
    }
}
