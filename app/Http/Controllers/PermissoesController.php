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
