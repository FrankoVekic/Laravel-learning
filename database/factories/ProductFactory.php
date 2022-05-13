<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'quantity' => $this->faker->unique()->numberBetween(1,20),
            'price' => $this->faker->randomFloat(2,1,100),
            'description' => $this->faker->paragraph(),
        ];
    }
}
