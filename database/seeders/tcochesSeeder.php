<?php

namespace Database\Seeders;

use App\Models\tcoches;
use App\Models\Ttipos_motor;
use App\Models\Textra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class tcochesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Desactivamos restricciones para poder hacer truncate sin errores de claves foráneas
        Schema::disableForeignKeyConstraints();

        tcoches::truncate();
        Textra::truncate();
        Ttipos_motor::truncate();

        Schema::enableForeignKeyConstraints();

        // 1. Crear tipos de motor obligatorios para la relación 1:N
        Ttipos_motor::create(['nombre' => 'Gasolina', 'descripcion' => 'Motor de gasolina convencional']);
        Ttipos_motor::create(['nombre' => 'Diésel', 'descripcion' => 'Motor diésel con turbo']);
        Ttipos_motor::create(['nombre' => 'Híbrido', 'descripcion' => 'Motor combinado gasolina y eléctrico']);
        Ttipos_motor::create(['nombre' => 'Eléctrico', 'descripcion' => 'Vehículo 100% eléctrico']);

        // 2. Crear extras para la relación N:M
        Textra::create(['nombre' => 'Techo solar', 'precio' => 500.00]);
        Textra::create(['nombre' => 'Navegador GPS', 'precio' => 300.00]);
        Textra::create(['nombre' => 'Asientos calefactables', 'precio' => 250.00]);
        Textra::create(['nombre' => 'Sensores de aparcamiento', 'precio' => 150.00]);

        // 3. Crear los 50 coches usando tu magnífica factory (que ya asigna el motor aleatorio)
        $coches = tcoches::factory(50)->create();

        // 4. Asignar extras aleatorios a cada coche en la tabla pivot (relación N:M)
        $extras = Textra::all();
        $coches->each(function ($coche) use ($extras) {
            $coche->extras()->attach(
                $extras->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}