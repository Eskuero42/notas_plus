<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function ListarEstudiantes()
    {
        // Obtener todos los alumnos de la base de datos
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        // Obtener todos los estudiantes agrupados por curso
        $estudiantesPorCurso = Estudiante::with('curso') // Asegúrate de tener la relación 'curso' en tu modelo Estudiante
            ->get()
            ->groupBy('id_curso');
        // Retornar la vista con los datos
        return view('admin.estudiantes.listar', compact('estudiantes', 'cursos', 'estudiantesPorCurso'));
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
        return redirect()->route('admin.estudiantes.listar')->with('success', 'Estudiante actualizado correctamente');
    }

    // Eliminar estudiante
    public function eliminarEstudiante($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('admin.estudiantes.listar')->with('success', 'Estudiante eliminado correctamente');
    }
}
