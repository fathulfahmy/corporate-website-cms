<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postdoctoral>
 */
class PostdoctoralFactory extends Factory
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
            'email' => fake()->email(),
            'qualifications' => json_encode(fake()->sentences(3)),
            'research_areas' => json_encode(fake()->words(6)),
            'status' => fake()->randomElement(['Active', 'Inactive']),
        ];
    }
}
