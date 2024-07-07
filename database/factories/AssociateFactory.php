<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Associate>
 */
class AssociateFactory extends Factory
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
            'institute' => fake()->company(),
            'email' => fake()->email(),
            'qualifications' => fake()->sentences(3),
            'research_areas' => fake()->words(6),
            'status' => fake()->randomElement(['Active', 'Inactive']),
        ];
    }
}
