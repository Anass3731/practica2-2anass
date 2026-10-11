<?php

namespace Database\Factories;

use App\Models\Textra;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Textra>
 */
class TextraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
            'nombre' => $this->faker->unique()->randomElement(['Techo solar', 'Navegador GPS', 'Asientos calefactables', 'Sensores de aparcamiento', 'Llantas de aleación']),
            'precio' => $this->faker->randomFloat(2, 100, 1500),
        ];
    }
}
