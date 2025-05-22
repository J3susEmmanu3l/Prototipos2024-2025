<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\EstudianteController;
use App\Http\Controllers\Backend\DocenteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'tipo:0', 'verified'])->group(function () {
    Route::get('/estudiante/dashboard', [EstudianteController::class, 'dashboard'])->name('estudiante.dashboard');
});

Route::middleware(['auth', 'tipo:1', 'verified'])->group(function () {
    Route::get('/docente/dashboard', [DocenteController::class, 'dashboard'])->name('docente.dashboard');

    Route::get('/docente/clases', [DocenteController::class, 'clases'])->name('docente.clases');
});
