<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public function estudiante()
    {
        return $this->hasOne(Estudiante::class, 'id_persona');
    }

    public function materia()
    {
        return $this->hasOne(Materia::class, 'id_materia');
    }

    public function trimestre()
    {
        return $this->hasOne(Trimestre::class, 'id_trimestre');
    }
}
