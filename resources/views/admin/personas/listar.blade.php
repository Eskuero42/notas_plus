@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Lista de Personas')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <table class="tablaCurso table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Cuentas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $contador = 1; @endphp
                                @foreach ($personas as $persona)
                                    <tr class="text-center">
                                        <td>{{ $contador++ }}</td>
                                        <td>{{ $persona->nombre }} {{ $persona->apellido }}</td>
                                        <td>{{ $persona->correo }}</td>
                                        <td>{{ $persona->telefono }}</td>
                                        <td>{{ $persona->direccion }}</td>
                                        <td>
                                            <!-- Verifica si la persona ya tiene una cuenta asociada -->
                                            @if ($persona->user)
                                                <span class="ml-2 badge badge-primary" disabled>
                                                    <i class="fas fa-user-check"></i> Cuenta Existente
                                                </span>
                                                <!-- Mostrar el rol asignado con colores distintos -->
                                                @if($persona->user->role == 'admin')
                                                    <span class="ml-2 badge badge-danger">
                                                        <i class="fas fa-user-shield"></i> Administrador
                                                    </span>
                                                @elseif($persona->user->role == 'user')
                                                    <span class="ml-2 badge badge-success">
                                                        <i class="fas fa-user"></i> Usuario
                                                    </span>
                                                @endif
                                            @else
                                                <!-- Botón que abre el modal y pasa el id de la persona -->
                                                <button class="btn btn-sm btn-success" data-toggle="modal"
                                                    data-target="#roleModal-{{ $persona->id }}" data-id="{{ $persona->id }}">
                                                    <i class="fas fa-user-plus"></i> Crear Cuenta
                                                </button>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Botón de editar -->
                                            <a href="{{-- route('admin.personas.edit', $persona->id) --}}" class="btn btn-sm btn-warning" title="Editar">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <!-- Botón de eliminar -->
                                            <form action="{{-- route('admin.personas.destroy', $persona->id) --}}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar esta persona?');">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Modal para asignar rol -->
                        <div class="modal fade" id="roleModal-{{ $persona->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="roleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="text-center text-primary">
                                            <i class="fas fa-user-plus"></i> ¿Quiere crear cuenta para <strong>{{ $persona['nombre'] }} {{ $persona['apellido'] }}</strong>?
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <p class="text-center">
                                            <i class="fas fa-envelope"></i> <strong>Correo:</strong> <b class="text-info">{{ $persona['correo'] }}</b>
                                        </p>
                                        <p class="text-center">
                                            <i class="fas fa-key"></i> <strong>Contraseña:</strong> <b class="text-success">{{ $persona['carnet'] }}</b>
                                        </p>
                                        <p class="text-center text-warning">
                                            <i class="fas fa-info-circle fa-lg"></i> <span class="font-weight-bold">Esos datos serán su medio de autenticación.</span>
                                        </p>
                                        
                                        
                                        <form action="{{ route('admin.personas.crear.cuenta', $persona->id) }}"
                                            method="POST">
                                            @csrf
                                            <!-- Campos para los datos de la persona -->
                                            <div class="form-group">
                                                <label for="rol-{{ $persona->id }}" class="form-label">
                                                    <i class="fas fa-user-tag"></i> <span class="font-weight-bold">Seleccionar Rol</span>
                                                </label>
                                                <select class="form-control select2" name="role" id="rol-{{ $persona->id }}" required>
                                                    <option value="admin" class="text-primary">Administrador</option>
                                                    <option value="user" class="text-success">Usuario</option>
                                                </select>
                                            </div>
                                            
                                            <!-- Campo oculto para pasar el id de la persona -->
                                            <input type="hidden" name="persona_id" value="{{ $persona->id }}">

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary"
                                                    data-dismiss="modal">
                                                    <i class="fas fa-times"></i> Cancelar
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="fas fa-check"></i> Crear Cuenta
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
