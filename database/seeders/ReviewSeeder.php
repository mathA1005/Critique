<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;


class ReviewSeeder extends Seeder
{
    public function run()
    {
        Review::factory()->count(100)->create(); // Crée 100 entrées fictives
    }
}
