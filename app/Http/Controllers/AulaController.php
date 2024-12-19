<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function ListarAulas()
    {
        // Obtener todos los alumnos de la base de datos
        $aulas = Aula::all();
        // Retornar la vista con los datos
        return view('admin.aulas.listar', compact('aulas'));
    }

    public function RegistrarAulas(Request $request)
    {
        //dd($request);
        //exit;
        // Crear un nuevo estudiante
        Aula::create([
            'nombres' => $request->nombres,
            'descripcion' => $request->descripcion,
        ]);
        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('admin.aulas.listar')->with('success', 'Aula registrado exitosamente');
    }

    public function actualizarAula(Request $request, $id)
    {
        $aulas = Aula::findOrFail($id);
        $aulas->update($request->all());
        return redirect()->route('admin.aulas.listar')->with('success', 'Aula actualizada correctamente');
    }

    public function VerAulas($id)
    {
        // Busca el profesor con el ID proporcionado
        $aulas = Aula::findOrFail($id);

        // Retorna la vista con los datos del profesor
        return view('admin.aulas.ver', compact('aulas'));
    }

    public function eliminarAula($id)
    {
        $aulas = Aula::findOrFail($id);
        $aulas->delete();
        return redirect()->route('admin.aulas.listar')->with('success', 'Aula eliminada correctamente');
    }
}
