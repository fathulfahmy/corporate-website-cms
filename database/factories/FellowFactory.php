<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fellow>
 */
class FellowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => '',
            'name' => fake()->name(),
            'position' => fake()->jobTitle(),
            'email' => fake()->email(),
            'qualifications' => fake()->sentences(3),
            'research_areas' => fake()->words(6),
            'status' => fake()->randomElement(['Active', 'Inactive']),
        ];
    }
}
