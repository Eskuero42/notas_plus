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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role')->default('user');
            $table->unsignedBigInteger('id_personas')->nullable();
            $table->foreign('id_personas')->references('id')->on('personas')->onDelete('cascade');
            $table->unsignedBigInteger('id_profesor')->nullable(); // Nueva columna para Profesor
            $table->foreign('id_profesor')->references('id')->on('profesors')->onDelete('cascade'); // Clave foránea hacia Profesors
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
