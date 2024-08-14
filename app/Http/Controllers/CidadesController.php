<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('cidades.index');
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
        Cidade::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id):Cidade
    {
        $cidade = Cidade::findOrfail($id);
        return $cidade;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $cidade = Cidade::findOrfail($id);
        if (!$cidade) {
            return view('cidades.index')->with('error', 'Cidade não encontrado');
        }
        return view('cidades.edit', compact('cidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Cidade $cidade):bool
    {
        $cidadeUpdated = Cidade::findOrfail($cidade->id);
        if (!$cidadeUpdated) {
            return false;
        }
        $cidadeUpdated->update($cidade->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $cidade = Cidade::findOrfail($id);
        if (!$cidade) {
            return false;
        }
        $cidade->delete();
        return true;
    }
}
