<?php

namespace Database\Factories;

use App\Models\tcoches;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tprofessor;
use App\Models\Ttipos_motor;
/**
 * @extends Factory<tcoches>
 */
class tcochesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $numeros = fake()->numerify('####');

        $letrasEspanolas = ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N']; 

        $letras = implode('', fake()->randomElements($letrasEspanolas, 3));

        $matricula = $numeros . $letras;

        $marcasYModelos = [
            'Seat'       => ['Ibiza', 'Leon', 'Ateca', 'Arona'],
            'Citroën'    => ['Xsara Picasso', 'C3', 'C4', 'Berlingo'],
            'Peugeot'    => ['208', '308', '3008', '2008'],
            'Renault'    => ['Clio', 'Megane', 'Captur', 'Scenic'],
            'Volkswagen' => ['Golf', 'Polo', 'Tiguan', 'Passat'],
            'BMW'        => ['Serie 1', 'Serie 3', 'X3', 'X5'],
            'Audi'       => ['A3', 'A4', 'Q3', 'Q5'],
            'Ford'       => ['Focus', 'Fiesta', 'Kuga', 'Puma'],
        ];

        $colores = [
            'Blanco', 'Negro', 'Gris', 'Plata', 'Rojo', 
            'Azul', 'Verde', 'Amarillo', 'Naranja', 'Marrón'
        ];

        $marca = fake()->randomElement(array_keys($marcasYModelos));
        $modelo = fake()->randomElement($marcasYModelos[$marca]);
        $color = fake()->randomElement($colores);
        return [
        'matricula' => fake()->unique()->passthrough($matricula),
        'marca'     => $marca,
        'modelo'    => $modelo,
        'anyo'      => fake()->numberBetween(2000, 2026),
        'color'     => $color,    

        'ttipos_motor_id' => Ttipos_motor::inRandomOrder()->first()?->id ?? Ttipos_motor::factory(),
        ];
    }
}