<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'role' => 'Childminder',
            'company' => null,
            'location' => 'United Kingdom',
            'rating' => 5,
            'quote' => $this->faker->sentence(14),
            'metrics' => ['enquiries' => $this->faker->numberBetween(5, 30)],
            'is_featured' => $this->faker->boolean(),
            'is_published' => true,
        ];
    }
}
