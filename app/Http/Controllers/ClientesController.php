<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Contracts\View\View;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('clientes.index');
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
    public function store(Cliente $cliente)
    {
        Cliente::create($cliente->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Cliente
    {
        $cliente = Cliente::findOrfail($id);
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $cliente = Cliente::findOrfail($id);
        if (!$cliente) {
            return view('clientes.index')->with('error', 'Cliente não encontrado');
        }
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Cliente $cliente):bool
    {
        $clienteUpdated = Cliente::findOrfail($cliente->id);
        if (!$clienteUpdated) {
            return false;
        }
        $clienteUpdated->update($cliente->all());
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $cliente = Cliente::findOrfail($id);
        if (!$cliente) {
            return false;
        }
        $cliente->delete();
        return true;
    }
}
