<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('road-map/{id}/tasks', 'RoadMapController@showTasks')->name('roadmap.tasks');
