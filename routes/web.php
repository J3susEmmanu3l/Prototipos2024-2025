<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

// Página de inicio
Route::get('/', [HomeController::class, 'main']);

// Rutas de autenticación
Route::get('/iniciarsesion', [HomeController::class, 'iniciarsesion'])->name('iniciarsesion');
Route::post('/login', [HomeController::class, 'login'])->name('login');

Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/upload', [HomeController::class, 'upload'])->name('upload');

Route::get('/olvidar', [HomeController::class, 'olvidar'])->name('olvidar');

Route::get('/codigorecuperacion', [HomeController::class, 'codigorecuperacion'])->name('codigorecuperacion');

Route::get('/restaurar', [HomeController::class, 'restaurar'])->name('restaurar');

// Ruta protegida: solo accesible para usuarios autenticados
Route::get('/docente', [HomeController::class, 'docente'])->middleware('auth')->name('docente');

Route::get('/estudiante', [HomeController::class, 'estudiante'])->middleware('auth')->name('estudiante');


// Ejemplo de rutas para cursos (comentadas)
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);

/* Ruta con parámetros opcionales
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso de la categoría $categoria";
    } else {
        return "Bienvenido al curso: $curso";
    }
});
*/
