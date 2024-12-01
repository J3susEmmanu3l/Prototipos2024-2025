<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

// Página de inicio
Route::get('/', [HomeController::class, 'inicio']);

// Rutas de autenticación
Route::get('/iniciarsesion', [HomeController::class, 'iniciarsesion'])->name('iniciarsesion');
Route::post('/login', [HomeController::class, 'login'])->name('login');

Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/upload', [HomeController::class, 'upload'])->name('upload');

Route::get('/olvidarcontraseña', [HomeController::class, 'olvidar'])->name('olvidar');

// Ruta protegida: solo accesible para usuarios autenticados
Route::get('/principal', [HomeController::class, 'principal'])->middleware('auth')->name('principal');

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
