<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreguntaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'integer|required',
            'etiqueta_id' => 'integer|required',
            'titulo' => 'string|required',
            'contenido' => 'string|required'
        ]);
        $pregunta = Pregunta::create($request);
        if ($pregunta) {
            return session(['error' => 'Error al crear la pregunta']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pregunta $pregunta)
    {
        //
    }
}
