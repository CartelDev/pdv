<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Contracts\View\View;

class estadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View {
        return view('estados.index');   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Estado $estado) 
    {
        Estado::create($estado->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Estado {
        $estado = estado::findorfail($id);
        return $estado;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado):View
    {
        $estado = Estado::findOrfail($estado->id);
        if (!$estado) {
            return view('estados.index')->with('error', 'estado não encontrado');
        }
        return view('estados.edit', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Estado $estado):bool {
        $estadoUpdated = Estado::findOrfail($estado->id);
        if (!$estadoUpdated) {
            return false;  
        }
        $estadoUpdated->update($estado->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $estado = Estado::findOrfail($id);
        if (!$estado) {
            return false;
        }
        $estado->delete();return true;
    }
}
