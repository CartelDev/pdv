<?php

namespace App\Http\Controllers;

use App\Models\Caixa;
use App\Services\CaixaService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CaixaController extends Controller
{
    protected $caixaService;

    public function __construct(CaixaService $caixaService) {
        $this->caixaService = $caixaService;
    }

    public function index():View
    {
        return view('caixas.index');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'data_abertura' => 'required|date',
            'valor_abertura' => 'required|integer|max:20',
            'id_funcionario' => 'required|integer|max:20'
        ]);
        return response()->json($this->caixaService->create($validatedData));
    }

    public function show(Request $request)
    {
        
    }

    public function edit(Request $request)
    {
        
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id_caixa'=>'required|integer|max:20', 
            'data_fechamento'=>'required|date',
            'valor_fechamento'=>'required|integer|max:20'
        ]);

        return response()->json($this->caixaService->update($validatedData));
    }

    public function destroy(Request $request)
    {
        
    }
}
