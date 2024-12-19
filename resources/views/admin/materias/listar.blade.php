@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title')
    <i class="fas fa-book"></i> Lista de Materias
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <!--boton de registrar-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                        <i class="fas fa-plus"></i>Registrar nueva Materia
                    </button>
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
                                    <th></th>
                                    <th>Materia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $contador = 1; @endphp
                                @foreach ($materias as $materia)
                                    <tr class="text-center">
                                        <td>{{ $contador++ }}</td>
                                        <td>
                                            <!-- Asignar íconos según la materia -->
                                            @switch($materia->nombres)
                                                @case('Matemáticas')
                                                    <i class="fas fa-square-root-alt fa-2x"></i>
                                                    @break
                                                @case('Ciencias Naturales')
                                                    <i class="fas fa-leaf fa-2x"></i>
                                                    @break
                                                @case('Lenguaje y literatura')
                                                    <i class="fas fa-book fa-2x"></i>
                                                    @break
                                                @case('Ciencias sociales')
                                                    <i class="fas fa-globe fa-2x"></i>
                                                    @break
                                                @case('Educación física')
                                                    <i class="fas fa-dumbbell fa-2x"></i>
                                                    @break
                                                @case('Educación artística')
                                                    <i class="fas fa-palette fa-2x"></i>
                                                    @break
                                                @case('Inglés')
                                                    <i class="fas fa-language fa-2x"></i>
                                                    @break
                                                @case('Educación tecnológica')
                                                    <i class="fas fa-cogs fa-2x"></i>  <!-- Usé un ícono diferente aquí -->
                                                    @break
                                                @default
                                                    <i class="fas fa-cogs fa-2x"></i>
                                            @endswitch
                                        </td>
                                        <td>
                                            <span style="font-size: 1.2em; font-weight: bold;">{{ $materia->nombres }}</span>
                                        </td>
                                        <td>
                                            <!--boton de editar-->
                                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#editarModal{{ $materia->id }}">
                                                <i class="fas fa-pencil-alt"></i> <!-- Icono de lápiz -->
                                            </button>
                            
                                            <!-- Modal de edición -->
                                            <div class="modal fade" id="editarModal{{ $materia->id }}" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel{{ $materia->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Nombre actual de la Materia</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.materias.actualizar', $materia->id) }}" method="POST">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group">
                                                                            <label for="nombres"><i class="fas fa-user"></i> Nombre</label>
                                                                            <input type="text" class="form-control" id="nombres" name="nombres" 
                                                                                   value="{{ $materia->nombres }}" required>
                                                                        </div>
                                                                    </div>                                                                                                          
                                                                </div>                                                                                       
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-warning">Editar datos</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            
                                            <!--boton de eliminar-->
                                            <button type="button" class="btn btn-outline-danger btn-xl" data-toggle="modal" data-target="#modal-danger{{ $materia->id }}">
                                                <i class="fas fa-trash"></i> <!-- Icono de basurero -->
                                            </button>
                            
                                            <!--modal de eliminar de materia-->
                                            <div class="modal fade" id="modal-danger{{ $materia->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="eliminarModalLabel{{ $materia->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title"
                                                                id="eliminarModalLabel{{ $materia->id }}">
                                                                <i class="fas fa-trash-alt"></i> Confirmar Eliminación
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.materias.eliminar', $materia->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body text-center">
                                                                <div class="mb-3">
                                                                    <i
                                                                        class="fas fa-exclamation-circle fa-3x text-warning"></i>
                                                                </div>
                                                                <p>¿Estás seguro de que deseas eliminar a esta materia?</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
