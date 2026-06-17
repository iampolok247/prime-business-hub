<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 9999),
            'excerpt' => $this->faker->sentence(16),
            'content' => $this->faker->paragraphs(6, true),
            'status' => 'published',
            'published_at' => now(),
            'read_time' => $this->faker->numberBetween(4, 12),
            'views' => $this->faker->numberBetween(50, 500),
        ];
    }
}
