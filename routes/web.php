<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
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


Route::post('/registro-admin', [PersonaController::class, 'showForm'])
    ->name('registro-admin');


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
    // Mostrar listado de personas
    Route::get('/personas', [PersonaController::class, 'ListarPersonas'])
        ->name('personas.listar');

    Route::post('/cuenta/personas/{id}', [PersonaController::class, 'CrearCuentaPersonas'])
        ->name('personas.crear.cuenta');

    /*PROFESORES*/
    Route::get('/lista/profesores', [ProfesorController::class, 'ListarProfesores'])
        ->name('profesores.listar');

    Route::get('/ver/profesores/{id}', [ProfesorController::class, 'VerProfesores'])
        ->name('profesores.ver');

    Route::post('/lista/profesores/registrar', [ProfesorController::class, 'RegistrarProfesores'])
        ->name('profesores.registrar');

    Route::post('/profesor/actualizar/{id}', [ProfesorController::class, 'actualizarProfesor'])
        ->name('profesores.actualizar');

    Route::delete('/profesor/eliminar/{id}', [ProfesorController::class, 'eliminarProfesor'])
        ->name('profesores.eliminar');

    Route::post('/cuenta/profesor/{id}', [ProfesorController::class, 'CrearCuentaProfesor'])
        ->name('profesor.crear.cuenta');


    /*ESTUDIANTES*/
    Route::get('/lista/estudiantes', [EstudianteController::class, 'ListarEstudiantes'])
        ->name('estudiantes.listar');

    Route::post('/lista/estudiantes/registrar', [EstudianteController::class, 'RegistrarEstudiantes'])
        ->name('estudiantes.registrar');

    Route::post('/estudiante/actualizar/{id}', [EstudianteController::class, 'actualizarEstudiante'])
        ->name('estudiantes.actualizar');

    Route::delete('/estudiante/eliminar/{id}', [EstudianteController::class, 'eliminarEstudiante'])
        ->name('estudiantes.eliminar');

    /*AULAS*/
    Route::get('/lista/aulas', [AulaController::class, 'ListarAulas'])
        ->name('aulas.listar');

    Route::get('/ver/aulas/{id}', [AulaController::class, 'VerAulas'])
        ->name('aulas.ver');

    Route::post('/aulas/actualizar/{id}', [AulaController::class, 'actualizarAula'])
        ->name('aulas.actualizar');

    Route::post('/lista/aulas/registrar', [AulaController::class, 'RegistrarAulas'])
        ->name('aulas.registrar');

    Route::delete('/aula/eliminar/{id}', [AulaController::class, 'eliminarAula'])
        ->name('aulas.eliminar');

    /*CURSOS*/
    Route::get('/lista/cursos', [CursoController::class, 'ListarCursos'])
        ->name('cursos.listar');

    Route::post('/lista/cursos/registrar', [CursoController::class, 'RegistrarCursos'])
        ->name('cursos.registrar');

/*MATERIAS*/ 
    Route::get('/lista/materias', [MateriaController::class, 'ListarMaterias'])
        ->name('materias.listar');
    
    Route::post('/lista/materias/registrar', [MateriaController::class, 'RegistrarMaterias'])
        ->name('materias.registrar');
    
    Route::post('/profesor/materias/{id}', [MateriaController::class, 'actualizarMateria'])
        ->name('materias.actualizar');
    
    Route::delete('/materias/eliminar/{id}', [MateriaController::class, 'eliminarMateria'])
        ->name('materias.eliminar');
    
    Route::get('/ver/materias/{id}', [MateriaController::class, 'VerMaterias'])
        ->name('materias.ver');

/*MATERIAS_PROFESORES*/ 
    Route::post('/lista/materiaS/ver', [MateriaController::class, 'RegistrarMateriasProfesores'])
        ->name('materia_profesor.registrar');
    


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

    /*ESTUDIANTES*/
    Route::get('/lista/estudiantes', [EstudianteController::class, 'ListarEstudiantes'])
        ->name('estudiantes.listar');
        
    Route::post('/estudiante/actualizar/{id}', [EstudianteController::class, 'actualizarEstudiante'])
        ->name('estudiantes.actualizar');

    /*CURSOS*/
    Route::get('/lista/cursos', [CursoController::class, 'ListarCursosu'])
        ->name('cursos.listar');   



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
