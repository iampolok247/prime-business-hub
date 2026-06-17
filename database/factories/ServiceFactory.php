<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $name = $this->faker->words(3, true);

        return [
            'name' => Str::title($name),
            'slug' => Str::slug($name) . '-' . $this->faker->unique()->numberBetween(1, 9999),
            'category' => 'Business Setup',
            'excerpt' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(2, true),
            'benefits' => [$this->faker->sentence(), $this->faker->sentence()],
            'is_featured' => $this->faker->boolean(),
            'is_published' => true,
        ];
    }
}
