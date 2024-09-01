<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Services\ProdutoService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    protected $produtosService;

    public function __construct(ProdutoService $produtosService)
    {
        $this->produtosService = $produtosService;
    }

    public function index():View
    {
        return view('produtos.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome_produto'=>'required|string|max:255',
            'preco_compra'=>'required|numeric|max:20',
            'preco_venda'=>'required|numeric|max:20',
            'descricao_produto'=>'required|string|max:255',
            'estoque_minimo'=>'required|integer|max:20',
            'estoque_atual'=>'required|integer|max:20'            
        ]);

        $produto = $this->produtosService->create($validatedData);

        return response()->json($produto);
    }

    public function addProduto(Request $request)
    {
        $validatedData = $request->validate([
            'id_produto'=>'required|integer',
            'quantidade'=>'required|integer',
            'id_venda'=>'required|integer'
        ]);
        $this->produtosService->addProduto($validatedData);
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
    public function update(Produtos $produtos)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
