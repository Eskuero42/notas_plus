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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->string('nombres'); // Nombres 
            $table->string('apellidos'); // Apellidos 
            $table->string('carnet')->unique(); // Carnet único
            $table->string('domicilio'); // Domicilio 
            $table->string('celular'); // Celular
            $table->string('correo'); // Correo
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
