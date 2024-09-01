<?php

namespace App\Http\Controllers;

use App\Models\Permissao;
use App\Services\PermissaoService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PermissoesController extends Controller
{
    protected $permissaoService;

    public function __construct(PermissaoService $permissaoService)
    {
        $this->permissaoService = $permissaoService;
    }
    public function index():View
    {
        return view('permissoes.index');
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
            'nome_permissao'=>'required|string|max:255',
            'tabela_referencia'=>'required|string|max:255',
            'inserir'=>'required|boolean',
            'atualizar'=>'required|boolean',
            'excluir'=>'required|boolean',
        ]);

        return response()->json($this->permissaoService->create($validatedData));
    }

    public function addPermition(Request $request) {
        $validatedData = $request->validate([
            'id_usuario'=>'required|integer|max100',
            'nome_permissao'=>'required|string|max:255',
            'tabela_referencia'=>'required|string|max:255',
            'inserir'=>'required|boolean',
            'atualizar'=>'required|boolean',
            'excluir'=>'required|boolean',
        ]);

        return response()->json($this->permissaoService->addPermition($validatedData));
    }

    /**
     * Display the specified resource.
     */
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
    public function update(Permissao $permissao)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
