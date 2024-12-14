<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function ListarProfesores()
    {
        return view('admin.profesores.listar');
    }

    public function VerProfesores()
    {
        return view('admin.profesores.ver');
    }
}
