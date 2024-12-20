<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'carnet',
        'domicilio',
        'celular',
        'fecha_nacimiento',
        'id_curso'
    ];

    // Relación: un estudiante pertenece a un curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    public function nota()
    {
        return $this->hasMany(Nota::class, 'id_estudiante');
    }
}

