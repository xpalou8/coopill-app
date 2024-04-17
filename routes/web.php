<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ServiceController;

Route::get('/listaservicios', [ServiceController::class, 'index']);

Route::get('/listaplantas', [PlantController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('road-map/{id}/tasks', 'RoadMapController@showTasks')->name('roadmap.tasks');

Route::get('/plantas/{id}', [PlantController::class, 'show'])->name('plantas.show');
