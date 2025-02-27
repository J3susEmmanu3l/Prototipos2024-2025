<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\EstudianteController;
use App\Http\Controllers\Backend\DocenteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/estudiante/dashboard', function () {
//     return view('estudiante.dashboard');
// })->middleware(['auth'])->name('estudiante.dashboard');

// Route::get('/docente/dashboard', function () {
//     return view('docente.dashboard');
// })->middleware(['auth'])->name('docente.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'tipo:0'])->group(function () {
    Route::get('/estudiante/dashboard', [EstudianteController::class, 'dashboard'])->name('estudiante.dashboard');

});
Route::middleware(['auth', 'tipo:1'])->group(function () {
    Route::get('/docente/dashboard', [DocenteController::class, 'dashboard'])->name('docente.dashboard');

});
