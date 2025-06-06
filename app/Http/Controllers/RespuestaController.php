<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RespuestaController
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
        $request ->validate([
            'usuario_id' => 'integer|required',
            'pregunta_id' => 'integer|required',
            'contenido' => 'string|required'
        ]);
        $respuesta = Respuesta::create($request);
        if (!$respuesta) {
            return session(['error' => 'error al crear respuesta']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
