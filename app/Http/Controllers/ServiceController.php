<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('servicios.index', compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('servicios.show', compact('service'));
    }
}
