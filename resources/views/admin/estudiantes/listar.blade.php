@extends('admin.layouts.app')

@section('title', 'Registro Escolar')

@section('page-title', 'Lista de Estudiantes')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <!-- /.REGISTRAR ESTUDIANTE -->
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus"></i> Registrar
                    </a>

                    <!-- /.MODAL REGISTRAR ESTUDIANTE -->
                    <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modal-lg-label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h4 class="modal-title"><i class="fas fa-user-plus"></i> Registrar Estudiante</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.estudiantes.registrar') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <!-- Columna 1: Nombres y Apellidos -->
                                            <div class="col-md-6">
                                                <!-- Campo de Nombres -->
                                                <div class="form-group">
                                                    <label for="nombres"><i class="fas fa-user"></i> Nombres</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="nombres"
                                                            name="nombres" placeholder="Ingrese los nombres del estudiante"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Campo de Apellidos -->
                                                <div class="form-group">
                                                    <label for="apellidos"><i class="fas fa-user"></i> Apellidos</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="apellidos"
                                                            name="apellidos"
                                                            placeholder="Ingrese los apellidos del estudiante" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Columna 2: Carnet y Celular -->
                                            <div class="col-md-6">
                                                <!-- Campo de Carnet -->
                                                <div class="form-group">
                                                    <label for="carnet"><i class="fas fa-id-card"></i> Carnet</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-id-card"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="carnet"
                                                            name="carnet" placeholder="Ingrese el carnet del estudiante"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Campo de Celular -->
                                                <div class="form-group">
                                                    <label for="celular"><i class="fas fa-phone-alt"></i> Celular</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-phone-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="celular"
                                                            name="celular" placeholder="Ingrese el celular del estudiante"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- Columna 3: Domicilio y Curso -->
                                            <div class="col-md-6">
                                                <!-- Campo de Domicilio -->
                                                <div class="form-group">
                                                    <label for="domicilio"><i class="fas fa-home"></i> Domicilio</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-home"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="domicilio"
                                                            name="domicilio"
                                                            placeholder="Ingrese el domicilio del estudiante" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <!-- Campo de Curso -->
                                                <div class="form-group">
                                                    <label for="id_curso"><i class="fas fa-book"></i> Curso</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-book"></i></span>
                                                        </div>
                                                        <select class="form-control" id="id_curso" name="id_curso"
                                                            required>
                                                            <option value="">Seleccione un curso</option>
                                                            @foreach ($cursos as $curso)
                                                                <option value="{{ $curso->id }}">{{ $curso->grado }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
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
                    <!-- /.FIN MODAL REGISTRAR ESTUDIANTE -->
                </div>
            </div>
        </div>
        <!-- TABLA DE DATOS -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        @foreach ($cursos as $index => $curso)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#curso{{ $curso->id }}"
                                    data-toggle="tab">
                                    {{ $curso->grado }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        @foreach ($cursos as $index => $curso)
                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="curso{{ $curso->id }}">
                                <h3>Curso: {{ $curso->grado }}</h3>
                                <table id="tablaCurso{{ $curso->id }}"
                                    class="tablaCurso table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Carnet</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Domicilio</th>
                                            <th>Celular</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($curso->estudiantes as $estudiante)
                                            <tr>
                                                <td>{{ $estudiante->carnet }}</td>
                                                <td>{{ $estudiante->nombres }}</td>
                                                <td>{{ $estudiante->apellidos }}</td>
                                                <td>{{ $estudiante->domicilio }}</td>
                                                <td>{{ $estudiante->celular }}</td>
                                                <td>
                                                    <!-- Botón para editar -->
                                                    <button class="btn btn-warning btn-sm mx-1" data-toggle="modal"
                                                        data-target="#editarModal{{ $estudiante->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <!-- Botón para eliminar -->
                                                    <button class="btn btn-danger btn-sm mx-1" data-toggle="modal"
                                                        data-target="#eliminarModal{{ $estudiante->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                    <!-- Botón para ver -->
                                                    <button class="btn btn-info btn-sm mx-1" data-toggle="modal"
                                                        data-target="#verModal{{ $estudiante->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal Editar -->
                                            <div class="modal fade" id="editarModal{{ $estudiante->id }}" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel{{ $estudiante->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning text-white">
                                                            <h4 class="modal-title" id="editarModalLabel{{ $estudiante->id }}">
                                                                <i class="fas fa-edit"></i> Editar Estudiante
                                                            </h4>
                                                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('admin.estudiantes.actualizar', $estudiante->id) }}" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <!-- Columna 1: Nombres y Apellidos -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nombres"><i class="fas fa-user"></i> Nombres</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                                </div>
                                                                                <input type="text" name="nombres" class="form-control" value="{{ $estudiante->nombres }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="apellidos"><i class="fas fa-user"></i> Apellidos</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                                                </div>
                                                                                <input type="text" name="apellidos" class="form-control" value="{{ $estudiante->apellidos }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                            
                                                                <div class="row">
                                                                    <!-- Columna 2: Carnet y Celular -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="domicilio"><i class="fas fa-id-card"></i> Carnet</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                                                </div>
                                                                                <input type="number" name="carnet" class="form-control" value="{{ $estudiante->carnet }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="celular"><i class="fas fa-phone-alt"></i> Celular</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                                                                </div>
                                                                                <input type="text" name="celular" class="form-control" value="{{ $estudiante->celular }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <!-- Columna 3: Domicilio y Curso -->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="domicilio"><i class="fas fa-home"></i> Domicilio</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                                                                                </div>
                                                                                <input type="text" name="domicilio" class="form-control" value="{{ $estudiante->domicilio }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="id_curso"><i class="fas fa-book"></i> Curso</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                                                                                </div>
                                                                                <select class="form-control" id="id_curso" name="id_curso" required>
                                                                                    <option value="">Seleccione un curso</option>
                                                                                    @foreach ($cursos as $curso)
                                                                                        <option value="{{ $curso->id }}" 
                                                                                                @if ($curso->id == $estudiante->id_curso) selected @endif>
                                                                                            {{ $curso->grado }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                                    <i class="fas fa-times"></i> Cerrar
                                                                </button>
                                                                <button type="submit" class="btn btn-warning">
                                                                    <i class="fas fa-save"></i> Guardar Cambios
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <!-- Modal Eliminar -->
                                            <div class="modal fade" id="eliminarModal{{ $estudiante->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="eliminarModalLabel{{ $estudiante->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title"
                                                                id="eliminarModalLabel{{ $estudiante->id }}">
                                                                <i class="fas fa-trash-alt"></i> Confirmar Eliminación
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.estudiantes.eliminar', $estudiante->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body text-center">
                                                                <div class="mb-3">
                                                                    <i
                                                                        class="fas fa-exclamation-circle fa-3x text-warning"></i>
                                                                </div>
                                                                <p>¿Estás seguro de que deseas eliminar a este estudiante?
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
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
