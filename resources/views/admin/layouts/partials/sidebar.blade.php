<div class="preloader flex-column justify-content-center align-items-center" style="background-color: #302282; color: #fff;">
    <div class="loading-spinner"></div>
    <p class="text-center font-weight-bold mt-2">
        Cargando, por favor espere...
    </p>
</div>

<style>
.loading-spinner {
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-top: 4px solid #007bff;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>


<aside class="main-sidebar elevation-4">
    <a class="brand-link" style="display: flex; align-items: center; padding: 10px;">
        <img src="{{ asset('img/recurso7.png') }}" alt="Logo 1" class="brand-image img-circle elevation-4"
            style="box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.4); width: 50px; height: 60px; background-color: white; margin-right: 25px;">
        <img src="{{ asset('img/recurso6.png') }}" alt="Logo 2"
            style="box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.4); width: 120px; height: 30px; background-color: white; border-radius: 10px;">
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Materias -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Materias
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.materias.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>Lista de Materias</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Aulas -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Aulas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.aulas.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-door-open"></i>
                                <p>Lista de Aulas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Cursos -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard"></i>
                        <p>
                            Cursos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.cursos.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Lista de Cursos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Profesores -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Profesores
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.profesores.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>Lista de Profesores</p>
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
                            <a href="{{ route('admin.estudiantes.listar') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Lista de Alumnos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
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
