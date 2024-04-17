<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/proba', function () {
    return view('proba');
});

Route::get('road-map/{id}/tasks', 'RoadMapController@showTasks')->name('roadmap.tasks');
