<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Serie;

class SerieSeeder extends Seeder
{
    public function run()
    {
        Serie::factory()->count(50)->create(); // Crée 50 entrées fictives
    }
}
