<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use App\Http\Requests\StorePagamentoRequest;
use App\Http\Requests\UpdatePagamentoRequest;
use Illuminate\Contracts\View\View;

class PagamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('pagamentos.index');
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
    public function store(Pagamento $pagamento)
    {
        Pagamento::create($pagamento->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Pagamento
    {
        $pagamento = Pagamento::findOrfail($id);
        return $pagamento;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $pagamento = Pagamento::findOrfail($id);
        if (!$pagamento) {
            return view('pagamentos.index')->with('error', 'Pagamento não encontrado');
        }
        return view('pagamentos.edit', compact('pagamento$pagamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Pagamento $pagamento):bool
    {
        $pagamentoUpdated = Pagamento::findOrfail($pagamento->id);
        if (!$pagamentoUpdated) {
            return false;
        }
        $pagamentoUpdated->update($pagamento->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $pagamento = Pagamento::findOrfail($id);
        if (!$pagamento) {
            return false;
        }
        $pagamento->delete();
        return true;
    }
}
