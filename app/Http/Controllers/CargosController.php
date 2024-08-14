<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Contracts\View\View;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('cargos.index');
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
    public function store(Cargo $cargo)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Cargo
    {
        $cargo = Cargo::findOrfail($id);
        return $cargo;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $cargo = Cargo::findOrfail($id);
        if (!$cargo) {
            return view('cargos.index')->with('error', 'Cargo não encontrado');
        }
        return view('cargos.edit', compact('cargo$cargo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Cargo $cargo):bool
    {
        $cargoUpdated = Cargo::findOrfail($cargo->id);
        if (!$cargoUpdated) {
            return false;
        }
        $cargoUpdated->update($cargo->all());
        return true;
    }

    public function destroy(string $id):bool
    {
        $cargo = Cargo::findOrfail($id);
        if (!$cargo) {
            return false;
        }
        $cargo->delete();
        return true;
    }
}
