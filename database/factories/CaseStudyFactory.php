<?php

namespace Database\Factories;

use App\Models\CaseStudy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CaseStudyFactory extends Factory
{
    protected $model = CaseStudy::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(4);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 9999),
            'client_name' => $this->faker->name(),
            'challenge' => $this->faker->paragraph(),
            'solution' => $this->faker->paragraph(),
            'result' => $this->faker->paragraph(),
            'success_metrics' => ['monthly_income' => $this->faker->numberBetween(1800, 4200)],
            'is_published' => true,
            'published_at' => now(),
        ];
    }
}
