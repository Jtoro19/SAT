<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            for ($i = 1; $i <= 10; $i++) {
                Report::create([
                    'stationID' => rand(1, 15),
                    'date' => now()->subDays($i),
                    'quantity' => rand(10, 100) / 10,
                    'able' => true
                ]);
            }
        }
    }
}
