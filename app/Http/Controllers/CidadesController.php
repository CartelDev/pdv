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
        
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
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
    public function update(Cidade $cidade)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
