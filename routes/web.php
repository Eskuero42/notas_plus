<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider y todas ellas
| se asignan al grupo de middleware "web". ¡Haz algo genial!
|
*/

// Página principal, redirige dependiendo del rol del usuario
Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role === 'user') {
            return redirect()->route('user.dashboard');
        }
    }
    return view('principal');
})->name('principal');


/** ADMIN */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {
    // Crear rutas dentro de este espacio
    /***********************************************************************/
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    /* NOTA: No se usa el prefijo 'admin' para las rutas, por lo que las URLs 
       serán registradas directamente 
       (por ejemplo, '/registrarProfesor' en lugar de '/admin/registrarProfesor'). 
       Sin embargo todas las rutas mantienen el nombre 'admin.' */

/* PERSONAS */
    Route::get('/lista/personas', [PersonaController::class, 'ListarPersonas'])
    ->name('personas.listar');

    Route::post('/personas', [PersonaController::class, 'RegistrarPersonas'])
    ->name('personas.registrar');

    Route::post('/personas/{id}/crearcuenta', [PersonaController::class, 'CrearCuentaPersonas'])
    ->name('personas.crearCuenta');    

/*PROFESORES*/   
    Route::get('/lista/profesores', [ProfesorController::class, 'ListarProfesores'])
        ->name('profesores.listar');

    Route::get('/ver/profesores', [ProfesorController::class, 'VerProfesores'])
       ->name('profesores.ver');

/*ESTUDIANTES*/
    Route::get('/lista/estudiantes', [EstudianteController::class, 'ListarEstudiantes'])
        ->name('estudiantes.listar');

    Route::post('/lista/estudiantes/registrar', [EstudianteController::class, 'RegistrarEstudiantes'])
        ->name('estudiantes.registrar');

    Route::post('/estudiante/actualizar/{id}', [EstudianteController::class, 'actualizarEstudiante'])
    ->name('estudiantes.actualizar');

    Route::delete('/estudiante/eliminar/{id}', [EstudianteController::class, 'eliminarEstudiante'])
    ->name('estudiantes.eliminar');



    /***********************************************************************/
    // Fin de crear rutas
});
/** FIN ADMIN */


/** USUARIO */
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'role:user']], function () {
    // Crear rutas dentro de este espacio
    /***********************************************************************/
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');
    /* NOTA: No se usa el prefijo 'user' para las rutas, por lo que las URLs 
       serán registradas directamente 
       (por ejemplo, '/registrarProfesor' en lugar de '/admin/registrarProfesor').  
       Sin embargo todas las rutas mantienen el nombre 'user.' */





    /***********************************************************************/
    // Fin de crear rutas
});
/** FIN USUARIO */


// Rutas para perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Incluir las rutas de autenticación
require __DIR__ . '/auth.php';
