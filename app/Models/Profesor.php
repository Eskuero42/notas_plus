<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'carnet',
        'domicilio',
        'celular',
        'correo',
        'fotoProf',
        'fecha_nacimiento', // Asegúrate de incluir este campo
        'user_id',
    ];
    

    public $timestamps = false; // Deshabilita las marcas de tiempo automáticas

    public function user()
    {
        return $this->hasOne(User::class, 'id_profesor');
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'materia_profesors', 'id_profesor', 'id_materia');
    }
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_profesor');
    }
}
