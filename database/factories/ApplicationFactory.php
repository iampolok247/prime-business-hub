<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    protected $model = Application::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'experience' => $this->faker->paragraph(),
            'goals' => $this->faker->paragraph(),
            'timeline' => '1-3 months',
            'budget' => '2000-5000',
            'message' => $this->faker->sentence(),
            'status' => 'new',
        ];
    }
}
