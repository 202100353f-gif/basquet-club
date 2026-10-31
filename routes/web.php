<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EquipoController::class, 'inicio'])->name('inicio');
Route::get('/jugadores', [EquipoController::class, 'jugadores'])->name('jugadores');
Route::get('/partidos', [EquipoController::class, 'partidos'])->name('partidos');
Route::get('/contacto', [EquipoController::class, 'contacto'])->name('contacto');