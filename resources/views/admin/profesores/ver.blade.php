@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page-title', '')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              

              <h3 class="profile-username text-center">{{ $profesor->apellidos }} {{ $profesor->nombres }}</h3>

              <p class="text-muted text-center">Profesor</p>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Datos Personales</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Carnet de identidad</strong>

              <p class="text-muted">
                {{ $profesor->carnet }}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Domicilio</strong>

              <p class="text-muted">{{ $profesor->domicilio }}</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Correo</strong>

              <p class="text-muted">{{ $profesor->correo }}</p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Celular</strong>

              <p class="text-muted">{{ $profesor->celular }}</p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Fecha de nacimiento</strong>

              <p class="text-muted">{{ $profesor->fecha_nacimiento }}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#materias" data-toggle="tab">Materias</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="materias">
                  <section class="content">
                    <div class="row">
                      <div class="col-12">
                          <div class="card card-default" style="border-bottom: 3px solid black;">
                              <div class="card-body d-flex align-items-center justify-content-between">
                                  
                                  <!-- Contenedor de texto de izquierda a derecha, con flexbox -->
                                  <div class="d-flex w-100 justify-content-between">
                                      <!-- Caja de información izquierda (Materia) -->
                                      <div class="info-box bg-light" style="flex: 1; margin-right: 10px;">
                                          <div class="info-box-content text-center">
                                              <span class="info-box-text text-muted">Materia</span>
                                              <span class="info-box-number text-muted mb-0">Matemáticas</span>
                                          </div>
                                      </div>
                  
                                      <!-- Caja de información central (Curso) -->
                                      <div class="info-box bg-light" style="flex: 1; margin-right: 10px;">
                                          <div class="info-box-content text-center">
                                              <span class="info-box-text text-muted">Curso</span>
                                              <span class="info-box-number text-muted mb-0">4° Secundaria</span>
                                          </div>
                                      </div>
                  
                                      <!-- Ícono grande a la derecha -->
                                      <div style="flex-shrink: 0;">
                                          <i class="fas fa-exclamation-triangle text-dark" style="font-size: 5rem;"></i>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>                  
                  </section>
                </div>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection