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
            "image" => "default.png",
            "name" => fake()->name(),
            "email" => fake()->email(),
            "qualifications" => fake()->sentences(3),
            "research_areas" => fake()->words(6),
            "status" => fake()->randomElement(["Active", "Inactive"]),
        ];
    }
}
