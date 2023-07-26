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
        $title = fake()->unique()->realText(50);
        return [
            //
            'title' => $title,
            'slug' => str_replace(' ', '-',$title),
            'body' => fake()->realText(500),
            'views' => rand(0,200),
        ];
    }
}
