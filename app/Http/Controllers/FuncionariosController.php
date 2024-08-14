<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Contracts\View\View;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('funcionarios.index');
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
    public function store(Funcionario $funcionario)
    {
        Funcionario::create($funcionario->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Funcionario
    {
        $funcionario = Funcionario::findOrfail($id);
        return $funcionario;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario):View
    {
        $funcionario = Funcionario::findOrfail($funcionario);
        if (!$funcionario) {
            return view('funcionarios.index')->with('error', 'Funcionário não encontrado');
        }
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Funcionario $funcionario):bool
    {
        $funcionarioUpdated = Funcionario::findOrfail($funcionario->id);
        if (!$funcionarioUpdated) {
            return false;
        }
        $funcionarioUpdated->update($funcionario->all());
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $funcionario = Funcionario::findOrfail($id);
        if (!$funcionario) {
            return false;
        }
        $funcionario->delete();
        return true;
    }
}
