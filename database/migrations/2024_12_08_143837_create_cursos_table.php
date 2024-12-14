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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->string('grado'); // Grado del curso
            $table->string('paralelo'); // Paralelo del curso
            $table->unsignedBigInteger('id_aula'); // clave foranea
            $table->timestamps();

            // Relación con la tabla aulas
            $table->foreign('id_aula')->references('id')->on('aulas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
