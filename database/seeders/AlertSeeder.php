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
                'reportID' => $i,
                'type' => rand(1, 2),
                'alertIntensity' => rand(1, 4)
            ]);
        }
    }
}
