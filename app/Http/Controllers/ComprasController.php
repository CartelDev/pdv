<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Http\Requests\StoreCompraRequest;
use App\Http\Requests\UpdateCompraRequest;
use Illuminate\Contracts\View\View;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('compras.index');
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
    public function store(Compra $compra)
    {
        Compra::create($compra->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):bool
    {
        $compra = Compra::findOrfail($id);
        return $compra;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $compra = Compra::findOrfail($id);
        if (!$compra) {
            return view('compras.index')->with('error', 'Compras não encontrado');
        }
        return view('compras.edit', compact('compra$compra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Compra $compra):bool
    {
        $compraUpdated = Compra::findOrfail($compra->id);
        if (!$compraUpdated) {
            return false;
        }
        $compraUpdated->update($compra->all());
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $compra = Compra::findOrfail($id);
        if (!$compra) {
            return false;
        }
        $compra->delete();
        return true;
    }
}
