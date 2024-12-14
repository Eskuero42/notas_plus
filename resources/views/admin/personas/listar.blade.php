@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', '')

@section('content')

<div class="container">
    <h1>Registro de Personas</h1>

    <form method="POST" action="{{ route('admin.personas.registrar') }}">
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Apellido</label>
            <input type="text" name="apellido" required>
        </div>
        <div>
            <label>Teléfono</label>
            <input type="text" name="telefono">
        </div>
        <div>
            <label>Dirección</label>
            <input type="text" name="direccion">
        </div>
        <button type="submit">Registrar Persona</button>
    </form>

    <hr>

    <h2>Personas Registradas</h2>
    <ul>
        @foreach ($personas as $persona)
            <li>
                {{ $persona->nombre }} {{ $persona->apellido }}
                @if ($persona->user)
                    <span>(Cuenta creada)</span>
                @else
                    <form method="POST" action="{{ route('admin.personas.crearCuenta', $persona->id) }}">
                        @csrf
                        <input type="email" name="email" value="{{$persona->correo}}" required>
                        <input type="text" name="password" value="{{$persona->carnet}}" placeholder="Contraseña" required>
                        
                        <button type="submit">Crear Cuenta</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
</div>
@endsection