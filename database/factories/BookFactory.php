<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word,
            'author_id' => fake()->numberBetween(1, 10),
            'category_id' => fake()->numberBetween(1, 10),
            'isbn' => $this->faker->unique()->numberBetween(1000, 9999),
            'year_published' => fake()->year,
            'available_copies' => fake()->randomNumber(2, true),
            'total_copies' => fake()->randomNumber(1, true),
        ];
    }
}
