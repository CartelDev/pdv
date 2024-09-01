<?php

namespace App\Http\Controllers;

use App\Models\Meios_Pagamento;
use App\Services\Meios_PagamentoService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request;

class Meios_PagamentosController extends Controller
{
    protected $meios_PagamentoService;

    public function __construct(Meios_PagamentoService $meios_PagamentoService) {
        $this->meios_PagamentoService = $meios_PagamentoService;
    }

    public function index()
    {
        return view('meios_pagamentos.index');
    }

    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'meio_pagamento' => 'required|string|max:100',
            'descricao_meio_pagamento' => 'required|string|max:100',
            'status_meio_pagamento' => 'required|string|max:100', 
        ]);
        $this->meios_PagamentoService->create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Meios_Pagamento $meios_Pagamento)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
