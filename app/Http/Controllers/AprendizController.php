<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizController extends Controller
{
    public function index()
    {
        return view('aprendices.index');
    }

    public function create()
    {
        return view('aprendices.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'documento' => 'required|string|max:30',
        'correo' => 'required|email|max:255',
    ]);

    return 'Aprendiz recibido (simulado)';
}
}

