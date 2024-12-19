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
            $table->id();
            $table->string('nombres'); 
            $table->string('apellidos'); 
            $table->string('carnet'); 
            $table->string('domicilio'); 
            $table->string('celular'); 
            $table->string('correo'); 
            $table->date('fecha_nacimiento');
            $table->string('fotoProf')->nullable(); 
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
