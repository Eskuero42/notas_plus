@extends('admin.layouts.app')
@section('title', 'Materia: ' . $materia->nombre)

@section('content')
<div class="container-fluid">
    <!-- Nombre de la Materia -->
    <div class="row mb-3">
      <div class="col-md-12">
        <h2 class="text-center">
            <!-- Mostrar el nombre de la materia -->
            {{ $materia->nombres }}
    
            <!-- Mostrar un ícono basado en el nombre de la materia -->
            @if($materia->nombres == 'Matemáticas')
                <i class="fas fa-calculator"></i> <!-- Ícono de calculadora -->
            @elseif($materia->nombres == 'Física')
                <i class="fas fa-atom"></i> <!-- Ícono de átomo -->
            @elseif($materia->nombres == 'Química')
                <i class="fas fa-flask"></i> <!-- Ícono de frasco de laboratorio -->
            @elseif($materia->nombres == 'Historia')
                <i class="fas fa-history"></i> <!-- Ícono de historia -->
            @elseif($materia->nombres == 'Lengua')
                <i class="fas fa-book"></i> <!-- Ícono de libro -->
            @else
                <i class="fas fa-university"></i> <!-- Ícono por defecto de universidad -->
            @endif
        </h2>
    </div>
    
    </div>

    <!-- Botón para registrar Materia-Profesor -->
    <div class="row mb-3">
        <div class="col-md-12 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarProfesorModal">
            Asignar Profesor
          </button>        
        </div>
    </div>

    <!-- Tabla de Profesores Relacionados -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Profesores de {{ $materia->nombres }}</h3>
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Profesor</th>
                            <th>Carnet</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($profesores as $profesor)
                            <tr>
                                <td>{{ $profesor->nombres }} {{ $profesor->apellidos }}</td>
                                <td>{{ $profesor->carnet }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">
                                        Asignar Curso
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No hay profesores asignados a esta materia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para registrar materia_profesor -->
<div class="modal fade" id="registrarProfesorModal" tabindex="-1" role="dialog" aria-labelledby="registrarProfesorModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form action="{{ route('admin.materia_profesor.registrar') }}" method="POST">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="registrarProfesorModalLabel">Asignar Profesor a Materia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- Campo oculto para el ID de la materia -->
                  <input type="hidden" name="id_materia" value="{{ $materia->id }}">

                  <!-- Lista desplegable para seleccionar un profesor -->
                  <div class="form-group">
                      <label for="id_profesor">Seleccionar Profesor</label>
                      <select class="form-control" id="id_profesor" name="id_profesor" required>
                          <option value="" disabled selected>-- Seleccione un Profesor --</option>
                          @foreach ($profesoresDisponibles as $profesor)
                              <option value="{{ $profesor->id }}">
                                  {{ $profesor->nombres }} {{ $profesor->apellidos }} ({{ $profesor->carnet }})
                              </option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Asignar Profesor</button>
              </div>
          </form>
      </div>
  </div>
</div>

@endsection
