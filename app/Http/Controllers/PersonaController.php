<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Profesor;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller
{
    public function ListarPersonas()
    {
        $personas = Persona::all(); // Obtener todas las personas

        return view('admin.personas.listar', compact('personas'));
    }

    public function CrearCuentaPersonas(Request $request)
    {
        //dd($request->all());
        // Obtener la persona según el ID recibido
        $persona = Persona::findOrFail($request->persona_id);
        $profesor = Profesor::findOrFail($request->profesor_id);

        // Crear el usuario
        $user = User::create([
            'name' => "{$persona->nombre} {$persona->apellido}",
            'email' => $persona->correo,
            'password' => bcrypt($persona->carnet),
            'id_personas' => $persona->id,
            'id_profesor' => $profesor->id,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.personas.listar')->with('success', 'Cuenta creada exitosamente.');
    }

    public function showForm(Request $request)
    {
        $request->validate([
            'admin_code' => 'required|in:1234567890', // Validación del código
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'admin_code.in' => 'El código de verificación es incorrecto.',
        ]);
    
        // Crear el usuario administrador
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);
    
        return redirect()->route('principal')->with('success', 'Cuenta de administrador registrada correctamente.');
    }
    
}
