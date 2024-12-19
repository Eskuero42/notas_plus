<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
    ];

    

    public function user()
    {
        return $this->hasOne(User::class, 'id_materia');
    }

    public function profesores()
    {
        return $this->belongsToMany(Profesor::class, 'materia_profesors', 'id_materia', 'id_profesor');
    }

}
