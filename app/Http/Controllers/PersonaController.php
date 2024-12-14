<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonaController extends Controller
{
    public function ListarPersonas()
    {
        $personas = Persona::all();
        return view('admin.personas.listar', compact('personas'));
    }

    public function RegistrarPersonas(Request $request)
    {

        Persona::create([
            'carnet' => $request->carnet,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'domicilio' => $request->domicilio,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ]);

        return back()->with('success', 'Persona registrada con éxito.');
    }

    public function CrearCuentaPersonas(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_persona' => $persona->id,
        ]);

        return back()->with('success', 'Cuenta creada con éxito.');
    }
}
