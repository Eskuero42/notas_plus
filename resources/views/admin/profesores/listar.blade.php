@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', '')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <!--boton de registrar-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-xl">
                    Registrar nuevo Profesor
                </button>
                <!--modal de registrar profesor-->
                <div class="modal fade" id="modal-xl">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Formulario para registrar Profesor</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <form action="" method="POST">
                                    @csrf
                                    <!-- Campo oculto para el ID -->
                                    <input type="hidden" name="id" value="">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="nombres"><i class="fas fa-user"></i> Nombres</label>
                                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="apellidos"><i class="fas fa-user-tag"></i> Apellidos</label>
                                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="carnet"><i class="fas fa-id-card"></i> Carnet</label>
                                                <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Ingrese el carnet" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="domicilio"><i class="fas fa-home"></i> Domicilio</label>
                                                <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingrese el domicilio" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="celular"><i class="fas fa-phone"></i> Celular</label>
                                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese el celular" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="correo"><i class="fas fa-envelope"></i> Correo</label>
                                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="correo"><i class="fas fa-envelope"></i> Fecha de nacimiento</label>
                                                <input type="email" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese el correo" required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success toastrDefaultSuccess form="formRegistrarProfesor">Registrar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>  
                     
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Carnet</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Armando Fernando</td>
                            <td>Subieta Peñaranda</td>
                            <td>23212028</td>
                            <td>
                                <!--boton de ver-->
                                <a class="btn btn-outline-success btn-xl"  href="{{ route('admin.profesores.ver') }}" class="nav-link">
                                    <i class="fas fa-eye"></i> <!-- Icono de ojo -->
                                    
                                </a>
                                <!--boton de editar-->
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-xl-editar">
                                    <i class="fas fa-pencil-alt"></i> <!-- Icono de lápiz -->
                                    
                                </button>
                                <!--modal de editar datos de profesor-->
                                <!--modal de editar-->
                                <div class="modal fade" id="modal-xl-editar">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Datos del Profesor (nombre)</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <form action="" method="POST">
                                                    @csrf
                                                    <!-- Campo oculto para el ID -->
                                                    <input type="hidden" name="id" value="">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label for="nombres"><i class="fas fa-user"></i> Nombres</label>
                                                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label for="apellidos"><i class="fas fa-user-tag"></i> Apellidos</label>
                                                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label for="carnet"><i class="fas fa-id-card"></i> Carnet</label>
                                                                <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Ingrese el carnet" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label for="domicilio"><i class="fas fa-home"></i> Domicilio</label>
                                                                <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingrese el domicilio" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <label for="celular"><i class="fas fa-phone"></i> Celular</label>
                                                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese el celular" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label for="correo"><i class="fas fa-envelope"></i> Correo</label>
                                                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese el correo" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label for="correo"><i class="fas fa-envelope"></i> Fecha de nacimiento</label>
                                                                <input type="email" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Ingrese el correo" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-warning toastrDefaultWarning form="formRegistrarProfesor">Editar datos</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                <!--boton de eliminar-->
                                <button type="button" class="btn btn-outline-danger btn-xl" data-toggle="modal" data-target="#modal-danger">
                                    <i class="fas fa-trash"></i> <!-- Icono de basurero -->
                                    
                                </button>
                                <!--modal de eliminar de profesor-->
                                <div class="modal fade" id="modal-danger">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Eliminar Profesor</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body d-flex justify-content-center align-items-center" style="height: 200px;">
                                                <i class="fas fa-trash fa-3x text-white"><h3>Eliminar datos del Profesor (nombre)</h3></i> <!-- Icono de basurero centrado y más grande -->
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-outline-light">Guardar cambios</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</section>
@endsection