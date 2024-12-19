<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function ListarEstudiantes()
{
    $estudiantes = Estudiante::all();
    $cursos = Curso::all();
    $estudiantesPorCurso = Estudiante::with('curso')->get()->groupBy('id_curso');
    
    $role = auth()->user()->role;

    if ($role === 'admin') {
        // Redirige a la vista de admin
        return view('admin.estudiantes.listar', compact('estudiantes', 'cursos', 'estudiantesPorCurso'));
    } elseif ($role === 'user') {
        // Redirige a la vista de usuario
        return view('user.estudiantes.listar', compact('estudiantes', 'cursos', 'estudiantesPorCurso'));
    }

    abort(403, 'No tienes acceso a esta sección.');
}


    public function RegistrarEstudiantes(Request $request)
    {
        //dd($request);
        //exit;
        // Crear un nuevo estudiante
        Estudiante::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'carnet' => $request->carnet,
            'domicilio' => $request->domicilio,
            'celular' => $request->celular,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'id_curso' => $request->id_curso,
        ]);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('admin.estudiantes.listar')->with('success', 'Estudiante registrado exitosamente');
    }

    // Actualizar estudiante
    public function actualizarEstudiante(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        $role = auth()->user()->role;
    
        // Redirigir según el rol
        if ($role === 'admin') {
            return redirect()->route('admin.estudiantes.listar')->with('success', 'Estudiante actualizado correctamente.');
        } elseif ($role === 'user') {
            return redirect()->route('user.estudiantes.listar')->with('success', 'Estudiante actualizado correctamente.');
        }
        
        abort(403, 'No tienes acceso a esta acción.');
    }
    

    // Eliminar estudiante
    public function eliminarEstudiante($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('admin.estudiantes.listar')->with('success', 'Estudiante eliminado correctamente');
    }
}
