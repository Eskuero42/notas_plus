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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->string('nombres'); // Nombres 
            $table->string('apellidos'); // Apellidos 
            $table->string('carnet')->unique(); // Carnet único
            $table->string('domicilio'); // Domicilio 
            $table->string('celular'); // Celular
            $table->unsignedBigInteger('id_curso'); //clave foranea
            $table->timestamps(); 

            // Relación con la tabla cursos
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
