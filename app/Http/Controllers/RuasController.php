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
        Rua::create($request->all());
    }

    public function show(string $id):Rua
    {
        $rua = Rua::findOrfail($id);
        return $rua;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $rua = Rua::findOrfail($id);
        if (!$rua) {
            return view('ruas.index')->with('error', 'Rua não encontrada');
        }
        return view('ruas.edit', compact('rua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request):bool
    {
        $rua = Rua::findOrfail($request->id);
        if (!$rua) {
            return false;
        }
        $rua->update($request->except('_token', 'id'));
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $rua = Rua::findOrfail($id);
        if (!$rua) {
            return false;
        }
        $rua->delete();
        return true;
    }
}
