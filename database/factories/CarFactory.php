<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carTitle' => fake()->randomElement(['BMW', 'Mercedes', 'Fiat Tipo']),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2),
            'published' => fake()->numberBetween(0, 1),
            'image' => basename(fake()->image(public_path('assets/images/cars'))),
        ];
    }
}
