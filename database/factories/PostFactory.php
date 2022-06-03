<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => $this->faker->text(100),
            'title' => $this->faker->sentence(15),
            'excerpt' => $this->faker->sentence(3, true),
            'body' => $this->faker->paragraphs(4, true),
            'featured_image' => "post.png",
        ];
    }
}
