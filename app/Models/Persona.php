<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'carnet',
        'nombre',
        'apellido',
        'domicilio',
        'telefono',
        'correo',
        'telefono',
        'direccion'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
