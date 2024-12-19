@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title')
    <i class="fas fa-door-open"></i> Lista de Aulas
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <!--boton de registrar-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                        <i class="fas fa-plus"></i>Registrar nueva Aula
                    </button>
                    <!--modal de registrar profesor-->
                    <div class="modal fade" id="modal-xl">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h4 class="modal-title">
                                        <i class="fas fa-chalkboard"></i> Formulario para registrar Aula
                                    </h4>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- FORMULARIO -->
                                    <form action="{{ route('admin.aulas.registrar') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="nombres">Nombres</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="descripcion">Descripción</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripción" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Botones del modal -->
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                <i class="fas fa-times"></i> Cerrar
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-save"></i> Crear Aula
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
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $contador = 1; @endphp
                                @foreach ($aulas as $aula)
                                    <tr class="text-center">
                                        <td>{{ $contador++ }}</td>
                                        <td>{{ $aula->nombres }}</td>
                                        <td>{{ $aula->descripcion }}</td>
                                        <td>                                         
                                            <!--boton de editar-->
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarModal{{ $aula->id }}">
                                                <i class="fas fa-pencil-alt text-white"></i> <!-- Icono de lápiz -->
                                            </button>
                                            
                                            <!-- Modal de edición -->
                                            <div class="modal fade" id="editarModal{{ $aula->id }}" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel{{ $aula->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning text-white">
                                                            <h4 class="modal-title text-white"><i class="fas fa-chalkboard-teacher"></i> Datos del aula</h4> <!-- Título con color warning -->
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.aulas.actualizar', $aula->id) }}" method="POST">
                                                                @csrf
                                                                <div class="row">
                                                                    <!-- Campo Nombre con icono -->
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="nombres"><i class="fas fa-user"></i> Nombre</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-user"></i></span> <!-- Icono dentro del input -->
                                                                                </div>
                                                                                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $aula->nombres }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <!-- Campo Descripción con icono -->
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="descripcion"><i class="fas fa-info-circle"></i> Descripción</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-info-circle"></i></span> <!-- Icono dentro del input -->
                                                                                </div>
                                                                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $aula->descripcion }}" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                                        <i class="fas fa-times"></i> Cancelar</button>
                                                                    <button type="submit" class="btn btn-warning text-white">
                                                                        <i class="fas fa-pencil-alt"></i> Editar datos</button>
                                                                </div>
                                                            </form>           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--boton de eliminar-->
                                            <button type="button" class="btn btn-danger btn-xl" data-toggle="modal" data-target="#modal-danger{{ $aula->id }}">
                                                <i class="fas fa-trash"></i> <!-- Icono de basurero -->
                                                
                                            </button>
                                            <!--modal de eliminar de profesor-->
                                            <div class="modal fade" id="modal-danger{{ $aula->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="eliminarModalLabel{{ $aula->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title"
                                                                id="eliminarModalLabel{{ $aula->id }}">
                                                                <i class="fas fa-trash-alt"></i> Confirmar Eliminación
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.aulas.eliminar', $aula->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body text-center">
                                                                <div class="mb-3">
                                                                    <i
                                                                        class="fas fa-exclamation-circle fa-3x text-warning"></i>
                                                                </div>
                                                                <p>¿Estás seguro de que deseas eliminar a esta aula?
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
