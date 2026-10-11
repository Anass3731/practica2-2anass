<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tcoches', function (Blueprint $table) {            
            $table->string('matricula')->primary();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anyo');
            $table->string('color');
            
            // Clave foránea para el tipo de motor (1:N) apuntando a 'ttipos_motor'
            $table->foreignId('ttipos_motor_id')->constrained('ttipos_motor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcoches');
    }
};