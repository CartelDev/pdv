<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Http\Requests\StoreVendaRequest;
use App\Http\Requests\UpdateVendaRequest;
use App\Services\VendaService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    protected $vendaService;

    public function __construct(VendaService $vendaService) {
        $this->vendaService = $vendaService;
    }
    public function index():View
    {
        return view('vendas.index');
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
        $validatedData = $request->validate([
            'id_venda'=>'required|integer|max:20',
            'id_data_venda'=>'required|date',
            'id_caixa'=>'required|integer|max:20'
        ]);
        $this->vendaService->create($validatedData);

        return response()->json($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):Venda
    {
        $venda = Venda::findOrfail($id);
        return $venda;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $venda = Venda::findOrfail($id);
        if (!$venda) {
            return view('vendas.index')->with('error', 'Venda não encontrado');
        }
        return view('vendas.edit', compact('venda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Venda $venda):bool
    {
        return false;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):bool
    {
        $venda = Venda::findOrfail($id);
        if (!$venda) {
            return false;
        }
        $venda->delete();
        return true;
    }
}
