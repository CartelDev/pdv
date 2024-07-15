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
    public function store(Request $request):View
    {
        Pais::create($request->all());
        return view('paises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View {
        $pais = Pais::findOrfail($id);
        return view(
            'paises.show', 
            compact('pais')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request):View
    {
        $pais = Pais::findOrfail($request->id);
        if (!$pais) {
            return view('paises.index')->with('error', 'Pais não encontrado');
        }
        return view('paises.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pais $pais):View
    {
        $paisUpdated = Pais::findOrfail($request->id);
        if (!$paisUpdated) {
            return view('paises.index')->with('error', 'Pais não encontrado');
        }
        $paisUpdated->update($request->except('_token', 'id'));
        return view('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request):View
    {
        $pais = Pais::findOrfail($request->id);
        if (!$pais) {
            return view('paises.index')->with('error', 'Pais não encontrado');
        }
        $pais->delete();
        return view('paises.index');
    }
}
