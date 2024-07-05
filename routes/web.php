<?php

use App\Http\Controllers\DirectorioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio/mostrar',
          [DirectorioController::class, 'mostrar']);

Route::get('/directorio/agregar',
       [DirectorioController::class, 'crearContacto']);

Route::post('/directorio/salvar',
       [DirectorioController::class, 'guardar'])->name('directorio.guardar');       

route::get('/directorio/eliminar/{id}',
       [DirectorioController::class, 'eliminar'])->name('directorio.eliminar');

