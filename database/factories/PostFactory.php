<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->words(5, asText: true),
            'body' => $this->faker->randomHtml(),
            'description' => $this->faker->sentences(2, asText: true),
            'published' => $this->faker->boolean()
        ];
    }
}
