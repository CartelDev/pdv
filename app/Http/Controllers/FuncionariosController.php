<?php

namespace App\Http\Controllers;

use App\Http\Services\FuncionarioService;

use App\Models\Funcionario;
use App\Services\FuncionarioService as ServicesFuncionarioService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\Request;

class FuncionariosController extends Controller
{
    protected $funcionarioService;

    public function __construct(ServicesFuncionarioService $funcionarioService)
    {
        $this->funcionarioService = $funcionarioService;        
    }
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('funcionarios.index');
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
           'id_funcionario'=>'required|integer|max:20',
           'id_usuario'=>'required|integer|max:20',
           'id_cargo'=>'required|integer|max:20' 
        ]);

        $funcionario = $this->funcionarioService->create($validatedData);

        return response()->json($funcionario);
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
    public function edit(Funcionario $funcionario)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Funcionario $funcionario)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
