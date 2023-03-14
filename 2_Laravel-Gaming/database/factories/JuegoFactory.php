<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juego>
 */
class JuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
        [
            'titulo' => fake()->sentence(),
            'estudio' => fake()->name(),
            'fecha' => fake()->date(),
            'puntuacion' => fake()->numberBetween(0,10),
        ];
    }
}
