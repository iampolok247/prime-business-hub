<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    protected $model = Faq::class;

    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence(8),
            'answer' => $this->faker->paragraph(3),
            'sort_order' => $this->faker->numberBetween(0, 25),
            'is_featured' => $this->faker->boolean(),
            'is_published' => true,
        ];
    }
}
