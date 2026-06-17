<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 9999),
            'template' => 'default',
            'content' => $this->faker->paragraphs(3, true),
            'is_published' => true,
            'published_at' => now(),
            'sort_order' => $this->faker->numberBetween(0, 50),
        ];
    }
}
