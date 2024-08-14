<?php

namespace App\Http\Controllers;

use App\Models\Meios_Pagamento;
use App\Http\Requests\StoreMeios_PagamentoRequest;
use App\Http\Requests\UpdateMeios_PagamentoRequest;
use Illuminate\Contracts\View\View;

class Meios_PagamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meios_pagamentos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Meios_Pagamento $meios_Pagamento)
    {
        Meios_Pagamento::create($meios_Pagamento->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Meios_Pagamento 
    {
        $meios_Pagamento = Meios_Pagamento::findOrfail($id);
        return $meios_Pagamento;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $meios_Pagamento = Meios_Pagamento::findOrfail($id);
        if (!$meios_Pagamento) {
            return view('meios_pagamentos.index')->with('error', 'Meio de Pagamento não encontrado');
        }
        return view('meios_pagamentos.edit', compact('meios_Pagamento$meios_Pagamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Meios_Pagamento $meios_Pagamento):bool
    {
        $meios_PagamentoUpdated = Meios_Pagamento::findOrfail($meios_Pagamento->id);
        if (!$meios_PagamentoUpdated) {
            return false;
        }
        $meios_PagamentoUpdated->update($meios_Pagamento->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $meios_Pagamento = Meios_Pagamento::findOrfail($id);
        if (!$meios_Pagamento) {
            return false;
        }
        $meios_Pagamento->delete();
        return true;
    }
}
