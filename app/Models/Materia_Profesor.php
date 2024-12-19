<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia_Profesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_materia',
        'id_profesor',
    ];
    protected $table = 'materia_profesors'; // Define explícitamente el nombre de la tabla
}
