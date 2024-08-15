<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use App\Services\PagamentoService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagamentosController extends Controller
{
    protected $pagamentoService;

    public function __construct(PagamentoService $pagamentoService) 
    {
        $this->pagamentoService = $pagamentoService;
    }
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'data_pagamento' => 'required|date',
            'valor_pagamento' => 'required|integer|max:20',
            'id_meios_pagamento' => 'required|integer|max:20',
            'id_venda' => 'required|integer|max:20',
        ]);
        $this->pagamentoService->create($$validatedData);
    }

    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Pagamento $pagamento)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
