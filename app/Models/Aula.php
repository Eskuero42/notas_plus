<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    // Relación: un aula tiene muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_aula');
    }
}

