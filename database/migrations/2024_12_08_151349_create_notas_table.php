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
        Schema::create('notas', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->unsignedBigInteger('id_materia_profesor_curso'); //  foránea de materias_profesores_cursos
            $table->unsignedBigInteger('id_estudiante'); //  foránea de estudiantes
            $table->unsignedBigInteger('id_trimestre'); //  foránea de trimestres
            $table->integer('asistencia'); //  para asistencia
            $table->integer('tareas'); //  para tareas
            $table->integer('examen'); //  para examen
            $table->integer('final'); // Nota final
            $table->timestamps();

            // Relación con la tabla materias_profesores_cursos
            $table->foreign('id_materia_profesor_curso')->references('id')->on('materia_profesor_cursos')->onDelete('cascade');
            // Relación con la tabla estudiantes
            $table->foreign('id_estudiante')->references('id')->on('estudiantes')->onDelete('cascade');
            // Relación con la tabla trimestres
            $table->foreign('id_trimestre')->references('id')->on('trimestres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
