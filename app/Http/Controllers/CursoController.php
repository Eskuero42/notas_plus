<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function ListarCursos()
    {
        // Obtiene todos los cursos con sus relaciones (aula y estudiantes)
        $cursos = Curso::with(['aula', 'estudiantes'])->get();

        // Obtiene todas las aulas
        $aulas = Aula::all();

        // Obtiene todos los profesores
        $profesores = Profesor::all();

        // Retorna la vista con los datos de cursos, aulas y profesores
        return view('admin.cursos.listar', compact('cursos', 'aulas', 'profesores'));
    }

    public function ListarCursosu()
    {
        // Obtiene todos los cursos con sus relaciones (aula y estudiantes)
        $cursos = Curso::with(['aula', 'estudiantes'])->get();

        // Obtiene todas las aulas
        $aulas = Aula::all();

        // Obtiene todos los profesores
        $profesores = Profesor::all();

        // Retorna la vista con los datos de cursos, aulas y profesores
        return view('user.cursos.listar', compact('cursos', 'aulas', 'profesores'));
    }

    public function RegistrarCursos(Request $request)
    {
        // Validar los datos antes de guardarlos
        $request->validate([
            'grado' => 'required|string|max:255',
            'paralelo' => 'required|string|max:255',
            'id_aula' => 'required|exists:aulas,id',
            'id_profesor' => 'required|exists:profesors,id',
        ]);

        // Si los datos llegan correctamente, se procederá con la creación
        Curso::create([
            'grado' => $request->grado,
            'paralelo' => $request->paralelo,
            'id_aula' => $request->id_aula,
            'id_profesor' => $request->id_profesor,
        ]);
        // En tu controlador, carga los cursos junto con el profesor
        $aulas = Aula::with('cursos.profesor')->get();

        return redirect()->route('admin.cursos.listar')->with('success', 'Curso registrado exitosamente');
    }
    
}
