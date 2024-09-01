<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ControllerPaises extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('paises.index');
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
    public function store(Pais $pais)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    public function list()
    {
        
    }
    
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Pais $pais)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
