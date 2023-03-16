<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence(4, 8),
            'body' => $this->faker->paragraphs(5, true),
            'description' => $this->faker->text,
            'thumbnail' => 'images/pancakes_thumbnail_w320.jpg'
        ];
    }
}
