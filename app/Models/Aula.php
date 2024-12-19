<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombres',      // Asegúrate de incluir los campos que necesitas
        'descripcion',   // Incluye aquí todos los campos que están en tu base de datos y quieres permitir
    ];

    // Relación: un aula tiene muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_aula');
    }
}
