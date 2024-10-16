<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
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
            "title" => fake()->sentence(),
            "subtitle" => fake()->sentence(),
            "content" => fake()->paragraphs(3, true),
            "category" => fake()->randomElement(["News", "Events"]),
        ];
    }
}
