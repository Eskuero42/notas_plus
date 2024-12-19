@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title')
    <i class="fas fa-chalkboard-teacher"></i> Lista de Profesores
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <!--boton de registrar-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                        <i class="fas fa-plus"></i>Registrar nuevo Profesor
                    </button>
                    <!--modal de registrar profesor-->
                    <div class="modal fade" id="modal-xl" tabindex="-1" role="dialog" aria-labelledby="modal-xl-label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h4 class="modal-title"><i class="fas fa-chalkboard-teacher"></i> Formulario para
                                        registrar Profesor</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- FORMULARIO -->
                                    <form action="{{ route('admin.profesores.registrar') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="nombres"><i class="fas fa-user"></i> Nombres</label>
                                                    <input type="text" class="form-control" id="nombres" name="nombres"
                                                        placeholder="Ingrese los nombres" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="apellidos"><i class="fas fa-user-tag"></i> Apellidos</label>
                                                    <input type="text" class="form-control" id="apellidos"
                                                        name="apellidos" placeholder="Ingrese los apellidos" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="carnet"><i class="fas fa-id-card"></i> Carnet</label>
                                                    <input type="text" class="form-control" id="carnet" name="carnet"
                                                        placeholder="Ingrese el carnet" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="domicilio"><i class="fas fa-home"></i> Domicilio</label>
                                                    <input type="text" class="form-control" id="domicilio"
                                                        name="domicilio" placeholder="Ingrese el domicilio" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="celular"><i class="fas fa-phone"></i> Celular</label>
                                                    <input type="text" class="form-control" id="celular" name="celular"
                                                        placeholder="Ingrese el celular" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="correo"><i class="fas fa-envelope"></i> Correo</label>
                                                    <input type="email" class="form-control" id="correo" name="correo"
                                                        placeholder="Ingrese el correo" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Foto del Profesor</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="fotoProf" class="custom-file-input"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Elegir
                                                                Imagen</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="fecha_nacimiento"><i class="fas fa-calendar"></i> Fecha de
                                                        nacimiento</label>
                                                    <input type="date" class="form-control" id="fecha_nacimiento"
                                                        name="fecha_nacimiento" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                <i class="fas fa-times"></i> Cerrar
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-save"></i> Guardar Cambios
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <table class="tablaCurso table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Cuentas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $contador = 1; @endphp
                                @foreach ($profesores as $profesor)
                                    <tr class="text-center">
                                        <td>{{ $contador++ }}</td>
                                        <td class="text-center">
                                            <div class="text-center">
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="{{ asset('fotoProf/' . ($profesor->fotoProf ? $profesor->fotoProf : 'default.png')) }}"
                                                    alt="Foto de {{ $profesor->nombres }}"
                                                    style="width: 60px; height: 60px;">
                                            </div>
                                        </td>
                                        <td>{{ $profesor->nombres }} {{ $profesor->apellidos }}</td>
                                        <td>{{ $profesor->correo }}</td>
                                        <td>{{ $profesor->celular }}</td>
                                        <td>{{ $profesor->domicilio }}</td>
                                        <td>
                                            @if ($profesor->user)
                                                <!-- Cuenta ya existente -->
                                                <span class="ml-2 badge badge-primary">
                                                    <i class="fas fa-user-check"></i> Cuenta Existente
                                                </span>
                                            @else
                                                <!-- Botón para crear cuenta -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#roleModal-{{ $profesor->id }}">
                                                    Crear Cuenta
                                                </button>
                                            @endif
                                        </td>
                                        <td>
                                            <!--boton de ver-->
                                            <a class="btn btn-secondary btn-xl"
                                                href="{{ route('admin.profesores.ver', ['id' => $profesor->id]) }}">
                                                <i class="fas fa-eye"></i> <!-- Icono de ojo -->
                                            </a>
                                            <!--boton de editar-->
                                            <button type="button" class="btn btn-warning btn-xl" data-toggle="modal"
                                                data-target="#editarModal{{ $profesor->id }}">
                                                <i class="fas fa-pencil-alt text-white"></i> <!-- Icono de lápiz -->
                                            </button>

                                            <!-- Modal de edición -->
                                            <div class="modal fade" id="editarModal{{ $profesor->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="editarModalLabel{{ $profesor->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning text-white">
                                                            <h5 class="modal-title text-white">
                                                                <i class="fas fa-user-edit"></i> Editar Datos del Profesor
                                                            </h5>
                                                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.profesores.actualizar', $profesor->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <!-- Campo Nombres -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nombres" class="text-left"><i class="fas fa-user"></i> Nombres</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $profesor->nombres }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <!-- Campo Apellidos -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="apellidos" class="text-left"><i class="fas fa-user-tag"></i> Apellidos</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $profesor->apellidos }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                            
                                                                <div class="row">
                                                                    <!-- Campo Carnet -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="carnet" class="text-left"><i class="fas fa-id-card"></i> Carnet</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" id="carnet" name="carnet" value="{{ $profesor->carnet }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <!-- Campo Domicilio -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="domicilio" class="text-left"><i class="fas fa-home"></i> Domicilio</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ $profesor->domicilio }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <!-- Campo Celular -->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="celular" class="text-left"><i class="fas fa-phone"></i> Celular</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" id="celular" name="celular" value="{{ $profesor->celular }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="correo" class="text-left"><i class="fas fa-envelope"></i> Correo</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                </div>
                                                                                <input type="email" class="form-control" id="correo" name="correo" value="{{ $profesor->correo }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="fecha_nacimiento" class="text-left"><i class="fas fa-birthday-cake"></i> Fecha de nacimiento</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                                                                </div>
                                                                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $profesor->fecha_nacimiento }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="fotografia" class="text-left"><i class="fas fa-camera"></i> Fotografía</label>
                                                                            <!-- Mostrar la foto actual si existe -->
                                                                            @if ($profesor->fotoProf)
                                                                                <div class="text-center mb-2">
                                                                                    <a href="{{ asset('fotoProf/' . $profesor->fotoProf) }}" target="_blank">
                                                                                        <img src="{{ asset('fotoProf/' . $profesor->fotoProf) }}" alt="Foto Actual" width="100" class="rounded-circle">
                                                                                    </a>
                                                                                    <p class="mt-2">Foto actual</p>
                                                                                </div>
                                                                            @else
                                                                                <p>No se ha registrado una foto.</p>
                                                                            @endif
                                            
                                                                            <!-- Input para cargar nueva foto -->
                                                                            <input type="file" class="form-control" id="fotografia" name="fotografia" accept="image/*" onchange="previewImage(event)">
                                                                            <small class="form-text text-muted">Selecciona una nueva foto si deseas cambiarla.</small>
                                            
                                                                            <!-- Previsualización de la nueva imagen -->
                                                                            <div id="preview-container" class="text-center mt-3" style="display: none;">
                                                                                <img id="preview-image" src="#" alt="Previsualización" width="100" class="rounded-circle">
                                                                                <p>Previsualización de la nueva foto</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                
                                            
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">
                                                                        <i class="fas fa-times-circle"></i> Cancelar
                                                                    </button>
                                                                    <button type="submit" class="btn btn-warning text-white">
                                                                        <i class="fas fa-save"></i> Guardar Cambios
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--boton de eliminar-->
                                            <button type="button" class="btn btn-danger btn-xl" data-toggle="modal"
                                                data-target="#modal-danger{{ $profesor->id }}">
                                                <i class="fas fa-trash"></i> <!-- Icono de basurero -->
                                            </button>
                                            
                                            <!--modal de eliminar de profesor-->
                                            <div class="modal fade" id="modal-danger{{ $profesor->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="eliminarModalLabel{{ $profesor->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title"
                                                                id="eliminarModalLabel{{ $profesor->id }}">
                                                                <i class="fas fa-trash-alt"></i> Confirmar Eliminación
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.profesores.eliminar', $profesor->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body text-center">
                                                                <div class="mb-3">
                                                                    <i
                                                                        class="fas fa-exclamation-circle fa-3x text-warning"></i>
                                                                </div>
                                                                <p>¿Estás seguro de que deseas eliminar a este profesor?
                                                                </p>
                                                                <div class="mb-3">
                                                                    <i
                                                                        class="fas fa-exclamation-triangle text-warning"></i>
                                                                    <strong>Esta acción no se puede deshacer.</strong>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    <i class="fas fa-times"></i> Cancelar
                                                                </button>
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fas fa-trash"></i> Eliminar
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Modal para asignar rol -->
                        @if ($profesores->isNotEmpty())
                            @foreach ($profesores as $profesor)
                                <!-- Modal para asignar rol -->
                                <div class="modal fade" id="roleModal-{{ $profesor->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="text-center text-primary">
                                                    <i class="fas fa-user-plus"></i> ¿Quiere crear cuenta para
                                                    <strong>{{ $profesor['nombres'] }}
                                                        {{ $profesor['apellidos'] }}</strong>?
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <p class="text-center">
                                                    <i class="fas fa-envelope"></i> <strong>Correo:</strong> <b
                                                        class="text-info">{{ $profesor['correo'] }}</b>
                                                </p>
                                                <p class="text-center">
                                                    <i class="fas fa-key"></i> <strong>Contraseña:</strong> <b
                                                        class="text-success">{{ $profesor['carnet'] }}</b>
                                                </p>
                                                <p class="text-center text-warning">
                                                    <i class="fas fa-info-circle fa-lg"></i> <span
                                                        class="font-weight-bold">Esos
                                                        datos serán su medio de autenticación.</span>
                                                </p>

                                                <form action="{{ route('admin.profesor.crear.cuenta', $profesor->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <!-- Campo oculto para pasar el id de la persona -->
                                                    <input type="hidden" name="profesor_id"
                                                        value="{{ $profesor->id }}">

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
                            @endforeach
                        @else
                            <p class="text-center text-danger">
                                <i class="fas fa-exclamation-circle"></i> No hay profesores registrados para mostrar.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
