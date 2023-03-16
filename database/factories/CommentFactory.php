<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'comment' => fake()->text($maxNbChars = 140),
            'image_url' => fake()->imageUrl(250, 250),
            'user_id' => fake()->numberBetween(1,6),
            'sweet_id' => fake()->numberBetween(1, 47),
        ];
    }
}
