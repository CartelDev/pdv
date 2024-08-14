<?php

namespace App\Http\Controllers;

use App\Models\Caixa;
use Illuminate\Contracts\View\View;

class CaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('caixas.index');
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
    public function store(Caixa $caixa)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Caixa
    {
        $caixa = Caixa::findOrfail($id);
        return $caixa;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $caixa = Caixa::findOrfail($id);
        if (!$caixa) {
            return view('caixas.index')->with('error', 'Caixa não encontrado');
        }
        return view('caixas.edit', compact('caixa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Caixa $caixa):bool
    {
        $caixaUpdated = Caixa::findOrfail($caixa->id);
        if (!$caixaUpdated) {
            return false;
        }
        $caixaUpdated->update($caixa->all());
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $caixa = Caixa::findOrfail($id);
        if (!$caixa) {
            return false;
        }
        $caixa->delete();
        return true;
    }
}
