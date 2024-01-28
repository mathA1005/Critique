<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Album;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'artist' => $this->faker->name,
            'release_year' => $this->faker->year,
            'genre' => $this->faker->word,
            'rating' => $this->faker->randomFloat(1, 0, 10)
        ];
    }
}
