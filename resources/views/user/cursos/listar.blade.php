@extends('user.layouts.app')

@section('title', 'Registro Escolar')

@section('page-title', 'Lista de Cursos')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <!-- /.REGISTRAR ESTUDIANTE -->
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                        <i class="fas fa-plus"></i> Registrar Curso
                    </a>

                    <!-- /.MODAL REGISTRAR ESTUDIANTE -->
                    <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modal-lg-label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h4 class="modal-title"><i class="fas fa-user-plus"></i> Registrar Curso</h4>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.cursos.registrar') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="grado">Grado</label>
                                                    <input type="text" class="form-control" id="grado" name="grado" placeholder="Ingrese el grado del curso" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="paralelo">Paralelo</label>
                                                    <input type="text" class="form-control" id="paralelo" name="paralelo" placeholder="Ingrese el paralelo del curso" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_aula">Aula</label>
                                                    <select class="form-control" id="id_aula" name="id_aula" required>
                                                        <option value="">Seleccione un aula</option>
                                                        @foreach ($materias as $materia)
                                                            <option value="{{ $materia->id }}">{{ $materia->nombres }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_profesor">Profesor</label>
                                                    <select class="form-control" id="id_profesor" name="id_profesor" required>
                                                        <option value="">Seleccione un profesor</option>
                                                        @foreach ($profesores as $profesor)
                                                            <option value="{{ $profesor->id }}">{{ $profesor->nombres }} {{ $profesor->apellidos }}</option>
                                                        @endforeach
                                                    </select>
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
                        @foreach ($materias as $materia) <!-- Recorre todas las aulas -->
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#aula{{ $materia->id }}" data-toggle="tab">
                                    {{ $materia->nombres }} <!-- Muestra el nombre del aula -->
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        @foreach ($materias as $materia) <!-- Recorre todas las aulas -->
                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="aula{{ $materia->id }}">
                                @foreach ($cursos as $curso) <!-- Recorre los cursos de cada aula -->
                                    <h5>Curso: {{ $curso->grado }} {{ $curso->paralelo }}</h5>
                                    
                                    <!-- Mostrar el nombre del profesor debajo del nombre del curso -->
                                    <h5><strong>Profesor:</strong> 
                                        @if($curso->profesor)
                                            {{ $curso->profesor->nombres }} {{ $curso->profesor->apellidos }}
                                        @else
                                            Profesor no asignado
                                        @endif
                                    </h5>                                                              
                
                                    <table id="tablaCurso{{ $curso->id }}" class="tablaCurso table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Carnet</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Domicilio</th>
                                                <th>Celular</th>
                                                <th>Fecha de nacimiento</th>
                                                <th>Nota final</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($curso->estudiantes as $estudiante) <!-- Recorre los estudiantes de cada curso -->
                                               
                                                <tr>
                                                    <td>{{ $estudiante->carnet }}</td>
                                                    <td>{{ $estudiante->nombres }}</td>
                                                    <td>{{ $estudiante->apellidos }}</td>
                                                    <td>{{ $estudiante->domicilio }}</td>
                                                    <td>{{ $estudiante->celular }}</td>
                                                    <td>{{ $estudiante->fecha_nacimiento}}</td>
                                                    
                                                    @foreach ($estudiante['nota'] as $nota)
                                                    
                                                        @if ($nota['id_materia']== $materia->id)
                                                            <td>{{ $nota['final']}}</td>
                                                        @endif
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>        
    </section>
@endsection
