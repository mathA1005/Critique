<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Serie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Serie>
 */
class SerieFactory extends Factory
{
    protected $model = Serie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'creator' => $this->faker->name,
            'release_year' => $this->faker->year,
            'genre' => $this->faker->word,
            'rating' => $this->faker->randomFloat(1, 0, 10),
        ];
    }
}
