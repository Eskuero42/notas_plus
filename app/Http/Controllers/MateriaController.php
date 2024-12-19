<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Profesor;
use App\Models\Materia_Profesor;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function ListarMaterias()
    {
        // Obtener todos los alumnos de la base de datos
        $materias = Materia::all();
        // Retornar la vista con los datos
        return view('admin.materias.listar', compact('materias'));
    }

    public function RegistrarMaterias(Request $request)
    {
        //dd($request);
        //exit;
        // Crear un nuevo estudiante
        Materia::create([
            'nombres' => $request->nombres,
        ]);
        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('admin.materias.listar')->with('success', 'Materia registrado exitosamente');
    }

    public function actualizarMateria(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);
        $materia->update($request->all());
        return redirect()->route('admin.materias.listar')->with('success', 'Materia actualizada correctamente');
    }

    public function eliminarMateria($id)
    {
        $materia = Materia::findOrFail($id);
        $materia->delete();
        return redirect()->route('admin.materias.listar')->with('success', 'Materia eliminada correctamente');
    }

    public function VerMaterias($id)
    {
        // Buscar la materia con el ID proporcionado
        $materia = Materia::findOrFail($id);

        // Obtener los profesores ya asignados a la materia
        $profesores = $materia->profesores;

        // Obtener los profesores que no están asignados a esta materia
        $profesoresDisponibles = Profesor::whereNotIn('id', $materia->profesores->pluck('id'))->get();

        // Pasar ambas variables a la vista
        return view('admin.materias.ver', compact('materia', 'profesores', 'profesoresDisponibles'));
    }

    public function RegistrarMateriasProfesores(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'id_materia' => 'required|exists:materias,id',
            'id_profesor' => 'required|exists:profesors,id',
        ]);

        // Crear la relación entre materia y profesor
        Materia_Profesor::create([
            'id_materia' => $request->id_materia,
            'id_profesor' => $request->id_profesor,
        ]);

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('admin.materias.ver', ['id' => $request->id_materia])
            ->with('success', 'Profesor asignado exitosamente.');
    }

}
