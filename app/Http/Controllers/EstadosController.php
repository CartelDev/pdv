<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Contracts\View\View;

class estadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View {
        return view('estados.index');   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Estado $estado) 
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Estado $estado) {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
