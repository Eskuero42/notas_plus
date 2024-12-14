<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Relación: un curso tiene muchos estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'id_curso');
    }

    // Relación: un curso pertenece a un aula
    public function aula()
    {
        return $this->belongsTo(Aula::class, 'id_aula');
    }
}

