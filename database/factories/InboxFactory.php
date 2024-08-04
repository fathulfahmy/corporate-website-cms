<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inbox>
 */
class InboxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "sender" => fake()->name(),
            "email" => fake()->email(),
            "phone" => fake()->phoneNumber(),
            "subject" => fake()->sentence(),
            "message" => fake()->paragraphs(3, true),
            "status" => fake()->randomElement(["Unread", "Read"]),
        ];
    }
}
