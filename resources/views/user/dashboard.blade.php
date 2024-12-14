<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="#">

<body>
    <div class="container">
        <h1>User Dashboard</h1>
        <p>Bienvenido, {{ auth()->user()->name }}!</p>
        <P>USER</P>

         <!-- Boton de Logout (cerrar sesion) -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>
