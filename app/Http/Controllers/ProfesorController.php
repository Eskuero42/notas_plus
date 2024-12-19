<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProfesorController extends Controller
{
    public function ListarProfesores()
    {
        // Obtener todos los alumnos de la base de datos
        $profesores = Profesor::all();
        // Retornar la vista con los datos
        return view('admin.profesores.listar', compact('profesores'));
    }

    public function RegistrarProfesores(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'carnet' => 'required|string|max:20',
            'domicilio' => 'required|string|max:255',
            'celular' => 'required|string|max:15',
            'correo' => 'required|email',
            'fecha_nacimiento' => 'required|date',
            'fotoProf' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
          

        // Manejo de la imagen
        if ($request->hasFile('fotoProf')) {
            $image = $request->file('fotoProf');
            $imageName = str_replace(' ', '_', $request->nombres . '_' . $request->apellidos . '_' . $request->carnet . '.' . $image->getClientOriginalExtension());
            $image->move(public_path('fotoProf'), $imageName);
            $fotoProf = $imageName;
        } else {
            $fotoProf = 'default.png';
        }

        // Crear el registro
        Profesor::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'carnet' => $request->carnet,
            'domicilio' => $request->domicilio,
            'celular' => $request->celular,
            'correo' => $request->correo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'fotoProf' => $fotoProf,
        ]);

        return redirect()->route('admin.profesores.listar')->with('success', 'Profesor registrado exitosamente');
    }

    public function actualizarProfesor(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);
    
        // Manejar la nueva imagen si se cargó
        if ($request->hasFile('fotografia')) {
            $image = $request->file('fotografia');
    
            // Crear un nombre único para la nueva imagen
            $name_gen = $profesor->nombres . '_' . $profesor->apellidos . '_' . $profesor->carnet . '.' . $image->getClientOriginalExtension();
            $name_gen = str_replace(' ', '_', $name_gen);
    
            // Eliminar la imagen antigua si no es 'default.png'
            if ($profesor->fotoProf && $profesor->fotoProf != 'default.png') {
                $oldImagePath = public_path('fotoProf/' . $profesor->fotoProf);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Elimina la foto anterior del servidor
                }
            }
    
            // Mover la nueva imagen a la carpeta 'public/fotoProf'
            $image->move(public_path('fotoProf'), $name_gen);
    
            // Actualizar el campo fotoProf con el nuevo nombre
            $profesor->fotoProf = $name_gen;
        }
    
        // Actualizar los demás campos
        $profesor->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'carnet' => $request->carnet,
            'domicilio' => $request->domicilio,
            'celular' => $request->celular,
            'correo' => $request->correo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'fotoProf' => $profesor->fotoProf, // Mantener la foto actual si no se subió una nueva
        ]);
    
        return redirect()->route('admin.profesores.listar')->with('success', 'Profesor actualizado correctamente');
    }
    

    public function VerProfesores($id)
    {
        // Busca el profesor con el ID proporcionado
        $profesor = Profesor::findOrFail($id);

        // Retorna la vista con los datos del profesor
        return view('admin.profesores.ver', compact('profesor'));
    }

    public function VerProfesores2($id)
    {
        // Busca el profesor con el ID proporcionado
        $profesor = Profesor::findOrFail($id);

        // Retorna la vista con los datos del profesor
        return view('user.dashboard', compact('profesor'));
    }


    public function eliminarProfesor($id)
{
    $profesor = Profesor::findOrFail($id);

    // Verificar si tiene una foto asociada distinta de 'default.png'
    if ($profesor->fotoProf && $profesor->fotoProf != 'default.png') {
        $fotoPath = public_path('fotoProf/' . $profesor->fotoProf);

        // Eliminar el archivo si existe
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }
    }

    // Eliminar el registro del profesor
    $profesor->delete();

    return redirect()->route('admin.profesores.listar')->with('success', 'Profesor eliminado correctamente');
}


    public function CrearCuentaProfesor(Request $request)
    {
        //dd($request->all());
        // Obtener la persona según el ID recibido
        //$persona = Persona::findOrFail($request->persona_id);
        $profesor = Profesor::findOrFail($request->profesor_id);

        $user = User::create([
            'name' => "{$profesor->nombres} {$profesor->apellidos}",
            'email' => $profesor->correo,
            'password' => bcrypt($profesor->carnet),
            'id_profesor' => $profesor->id,
            'role' => 'user',
        ]);
        return redirect()->route('admin.profesores.listar')->with('success', 'Cuenta creada exitosamente.');
    }
}
