<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Http\Requests\StoreProdutosRequest;
use App\Http\Requests\UpdateProdutosRequest;
use Illuminate\Contracts\View\View;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('produtos.index');
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
    public function store(Produtos $produtos)
    {
        Produtos::create($produtos->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Produtos
    {
        $produtos = Produtos::findOrfail($id);
        return $produtos;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $produtos = Produtos::findOrfail($id);
        if (!$produtos) {
            return view('produtos.index')->with('error', 'Produtos não encontrado');
        }
        return view('produtos.edit', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Produtos $produtos):bool
    {
        $produtosUpdated = Produtos::findOrfail($produtos->id);
        if (!$produtosUpdated) {
            return false;
        }
        $produtosUpdated->update($produtos->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $produtos = Produtos::findOrfail($id);
        if (!$produtos) {
            return false;
        }
        $produtos->delete();
        return true;
    }
}
