<?php

namespace Database\Factories;

use App\Models\Ttipos_motor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ttipos_motor>
 */
class TtiposMotorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->randomElement(['Gasolina', 'Diésel', 'Híbrido', 'Eléctrico']),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
