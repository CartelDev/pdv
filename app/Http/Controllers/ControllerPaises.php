<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ControllerPaises extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('paises.index');
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
    public function store(Pais $pais)
    {
        Pais::create(
            $pais->only('pais', 'sigla_pais', 'observacao_pais')
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Pais
    {
        $pais = Pais::findOrfail($id);
        return $pais;
    }

    public function list():Pais
    {
        $pais = Pais::all();
        return $pais;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $pais = Pais::findOrfail($id);
        if (!$pais) {
            return view('paises.index')->with('error', 'Pais não encontrado');
        }
        return view('paises.edit', compact('pais$pais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Pais $pais):bool
    {
        $paisUpdated = Pais::findOrfail($pais->id);
        if (!$paisUpdated) {
            return false;
        }
        $paisUpdated->update($pais->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $pais = Pais::findOrfail($id);
        if (!$pais) {
            return false;
        }
        $pais->delete();
        return true;
    }
}
