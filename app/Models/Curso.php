<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'grado',
        'paralelo',
        'id_aula',
        'id_profesor',
    ];

    // Relación: un curso pertenece a un aula
    public function aula()
    {
        return $this->belongsTo(Aula::class, 'id_aula');
    }

    // Relación: un curso tiene muchos estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'id_curso');
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'id_profesor');
    }
}
