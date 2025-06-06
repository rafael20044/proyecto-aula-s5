<?php

namespace App\Http\Controllers;

use App\Models\Reaccion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReaccionController
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
            'usuario_id' => 'required',
            'pregunta_id' => '',
            'respuesta_id' => '', 
            'tipo' =>'string'
        ]);
        $reaccion = Reaccion::create($request);
        if (!$reaccion) {
            return session(['error' => 'Error al crear la reaccion']);
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Reaccion $reaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reaccion $reaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reaccion $reaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaccion $reaccion)
    {
        //
    }
}
