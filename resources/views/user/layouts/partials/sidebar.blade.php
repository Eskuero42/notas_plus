<div class="preloader flex-column justify-content-center align-items-center">
    <i class="fas fa-sync-alt fa-spin" style="font-size: 40px;"></i>
    <p class="loading-text text-center text-muted font-weight-bold" style="font-size: 18px; margin-top: 10px;">
        Cargando, por favor espere...
    </p>
</div>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Cursos -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Cursos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.cursos.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Lista de Cursos</p>
                            </a>
                        </li>
                    </ul>
                </li>
               
                <!-- Alumnos -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Alumnos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.estudiantes.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Lista de Alumnos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>Estadísticas</p>
                            </a>
                        </li>
                    </ul>
                </li>
           
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

