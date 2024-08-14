<?php

namespace App\Http\Controllers;

use App\Models\Permissao;
use App\Http\Requests\StorePermissaoRequest;
use App\Http\Requests\UpdatePermissaoRequest;
use Illuminate\View\View;

class PermissoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(Permissao $permissao)
    {
        Permissao::create($permissao->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Permissao
    {
        $permissao = Permissao::findOrfail($id);
        return $permissao;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $permissao = Permissao::findOrfail($id);
        if (!$permissao) {
            return view('permissoes.index')->with('error', 'Permissão não encontrada');
        }
        return view('permissoes.edit', compact('permissao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Permissao $permissao):bool
    {
        $permissaoUpdated = Permissao::findOrfail($permissao->id);
        if (!$permissaoUpdated) {
            return false;
        }
        $permissaoUpdated->update($permissao->all());
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $permissao = Permissao::findOrfail($id);
        if (!$permissao) {
            return false;
        }
        $permissao->delete();
        return true;
    }
}
