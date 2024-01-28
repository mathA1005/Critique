<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Crée un nouvel utilisateur ou utilisez User::inRandomOrder()->first()->id pour un utilisateur existant
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'comment' => $this->faker->paragraph,
            // Assurez-vous d'inclure les autres champs nécessaires ici
        ];
    }
}
