<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

Route::get('/listaplantas', [PlantController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('road-map/{id}/tasks', 'RoadMapController@showTasks')->name('roadmap.tasks');


