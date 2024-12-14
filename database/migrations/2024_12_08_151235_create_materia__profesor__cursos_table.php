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
        Schema::create('materia_profesor_cursos', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->unsignedBigInteger('id_materia_profesor'); // Clave foránea de materias_profesores
            $table->unsignedBigInteger('id_curso'); // Clave foránea de cursos
            $table->timestamps();
        
            // Relación con la tabla materias_profesores
            $table->foreign('id_materia_profesor')->references('id')->on('materia_profesors')->onDelete('cascade');
            // Relación con la tabla cursos
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia__profesor__cursos');
    }
};
