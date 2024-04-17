<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ServiceController;

Route::get('/listaservicios', [ServiceController::class, 'index']);


Route::get('/listaplantas', [PlantController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/proba', function () {
    return view('proba');
});

Route::get('road-map/{id}/tasks', 'RoadMapController@showTasks')->name('roadmap.tasks');

Route::get('/plantas/{id}', [PlantController::class, 'show'])->name('plantas.show');
Route::get('/servicios/{id}', [ServiceController::class, 'show'])->name('servicios.show');