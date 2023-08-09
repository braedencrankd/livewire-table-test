<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'director' => fake()->name(),
            'imageUrl' => fake()->imageUrl(),
            'duration' => fake()->numberBetween(1, 1000),
            'releaseDate' => fake()->date(),
            'genre' => fake()->name(),
        ];
    }
}