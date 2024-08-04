<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postgraduate>
 */
class PostgraduateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image" => "default.png",
            "name" => fake()->name(),
            "candidancy" => fake()->sentence(),
            "email" => fake()->email(),
            "supervisor" => fake()->name(),
            "research_areas" => fake()->words(6),
            "status" => fake()->randomElement(["Active", "Inactive"]),
        ];
    }
}
