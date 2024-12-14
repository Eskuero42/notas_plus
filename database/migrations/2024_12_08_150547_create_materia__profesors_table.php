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
        Schema::create('materia_profesors', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->unsignedBigInteger('id_materia'); // Clave foránea de materias
            $table->unsignedBigInteger('id_profesor'); // Clave foránea de profesores
            $table->timestamps(); // created_at y updated_at

            // Relación con la tabla materias
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('cascade');
            // Relación con la tabla profesores
            $table->foreign('id_profesor')->references('id')->on('profesors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia__profesors');
    }
};
