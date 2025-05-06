<?php

namespace App\Http\Controllers;

use App\Models\Preferencia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreferenciaController
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
            'etiqueta_id' => 'integer|required'
        ]);
        $preferencia = Preferencia::create($request);
        if (!$preferencia) {
            return session(['error' => 'Error al crear preferencia']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Preferencia $preferencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preferencia $preferencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Preferencia $preferencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preferencia $preferencia)
    {
        //
    }
}
