<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{-- route('admin.dashboard') --}}" class="nav-link">
                <i class="nav-icon fas fa-home"> Inicio</i> 
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- User Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                <!-- Mostrar la foto de perfil del profesor si existe -->
                @php
                    $profesor = Auth::user()->profesor;
                    $foto = $profesor && $profesor->fotoProf 
                            ? asset('fotoProf/' . $profesor->fotoProf) 
                            : asset('default.png'); // Imagen predeterminada
                @endphp
                <img src="{{ $foto }}" 
                     alt="Foto de perfil" 
                     class="img-circle elevation-2" 
                     style="width: 30px; height: 30px; object-fit: cover; margin-right: 10px;">
                <span>{{ Auth::user()->name }}</span>
                <small class="text-muted ml-2">
                    ({{ Auth::user()->role }})
                </small>
            </a>
            
               
            <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user-circle mr-2"></i> Perfil
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs mr-2"></i> Configuración
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}" class="dropdown-item m-0 p-0">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-block text-left">
                        <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
