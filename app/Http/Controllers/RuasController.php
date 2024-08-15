<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRuaRequest;
use App\Http\Requests\UpdateRuaRequest;
use App\Models\Rua;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RuasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ruas.index');
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
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
