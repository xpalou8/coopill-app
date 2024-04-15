<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Plant;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plant::all();
        return view('plantas.index', compact('plants'));
    }
}






