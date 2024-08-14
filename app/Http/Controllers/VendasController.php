<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Http\Requests\StoreVendaRequest;
use App\Http\Requests\UpdateVendaRequest;
use Illuminate\Contracts\View\View;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('vendas.index');
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
    public function store(Venda $venda)
    {
        Venda::create($venda->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Venda
    {
        $venda = Venda::findOrfail($id);
        return $venda;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $venda = Venda::findOrfail($id);
        if (!$venda) {
            return view('vendas.index')->with('error', 'Venda não encontrado');
        }
        return view('vendas.edit', compact('venda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Venda $venda):bool
    {
        $vendaUpdated = Venda::findOrfail($venda->id);
        if (!$vendaUpdated) {
            return false;
        }
        $vendaUpdated->update($venda->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $venda = Venda::findOrfail($id);
        if (!$venda) {
            return false;
        }
        $venda->delete();
        return true;
    }
}
