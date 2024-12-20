@extends('admin.layouts.app')

@section('title', 'Registro Escolar')

@section('page-title')
    <i class="fas fa-ruler"></i> Lista de Cursos
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <!-- /.REGISTRAR Curso -->
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus"></i> Registrar Curso
                    </a>

                    <!-- /.MODAL REGISTRAR Curso -->
                    <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modal-lg-label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h4 class="modal-title">
                                    <i class="fas fa-user-plus"></i> Registrar Curso
                                </h4>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.cursos.registrar') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <!-- Lista desplegable para el grado -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="grado">Grado</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                                    </div>
                                                    <select class="form-control" id="grado" name="grado" required>
                                                        <option value="">Seleccione el grado del curso</option>
                                                        <option value="Primer grado">Primer grado</option>
                                                        <option value="Segundo grado">Segundo grado</option>
                                                        <option value="Tercer grado">Tercer grado</option>
                                                        <option value="Cuarto grado">Cuarto grado</option>
                                                        <option value="Quinto grado">Quinto grado</option>
                                                        <option value="Sexto grado">Sexto grado</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Campo para Paralelo -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="paralelo">Paralelo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-columns"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="paralelo" name="paralelo"
                                                        placeholder="Ingrese el paralelo del curso" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Campo para Aula -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="id_aula">Aula</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                                                    </div>
                                                    <select class="form-control" id="id_aula" name="id_aula" required>
                                                        <option value="">Seleccione un aula</option>
                                                        @foreach ($aulas as $aula)
                                                            @if ($aula->cursos->isEmpty())
                                                                <option value="{{ $aula->id }}">{{ $aula->nombres }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Campo para Profesor -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="id_profesor">Profesor</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                                                    </div>
                                                    <select class="form-control" id="id_profesor" name="id_profesor" required>
                                                        <option value="">Seleccione un profesor</option>
                                                        @foreach ($profesores as $profesor)
                                                            @if ($profesor->cursos->isEmpty())
                                                                <option value="{{ $profesor->id }}">
                                                                    {{ $profesor->nombres }} {{ $profesor->apellidos }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrar Curso</button>
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
                        @foreach ($aulas as $aula)
                            <!-- Recorre todas las aulas -->
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#aula{{ $aula->id }}"
                                    data-toggle="tab">
                                    {{ $aula->nombres }} <!-- Muestra el nombre del aula -->
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        @foreach ($aulas as $aula)
                            <!-- Recorre todas las aulas -->
                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="aula{{ $aula->id }}">
                                
                                @foreach ($aula->cursos as $curso)
                                    <div class="card">

                                        <div class="profesor-info bg-light">
                                            
                                            <h3>Aula: {{ $aula->nombres }}</h3>
                                            <h5>Curso: {{ $curso->grado }} {{ $curso->paralelo }}</h5>
                                            <h5><strong>Profesor:</strong>
                                                @if ($curso->profesor)
                                                    {{ $curso->profesor->nombres }} {{ $curso->profesor->apellidos }}
                                                @else
                                                    Profesor no asignado
                                                @endif
                                            </h5>
                                        </div>

                                        <!-- Tabla -->
                                        <table id="tablaCurso{{ $curso->id }}"
                                            class="tablaCurso table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Carnet</th>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Domicilio</th>
                                                    <th>Celular</th>
                                                    <th>Fecha de nacimiento</th>
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
                                                        <td>{{ $estudiante->fecha_nacimiento }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
