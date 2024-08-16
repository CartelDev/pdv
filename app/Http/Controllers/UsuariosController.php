<?php

namespace App\Http\Controllers;

use App\Enum\TipoUsuario;
use App\Models\Pais;
use App\Models\Usuario;
use App\Services\CidadeService;
use App\Services\EstadoService;
use App\Services\PaisService;
use App\Services\RuaService;
use App\Services\UsuarioService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class UsuariosController extends Controller
{
    protected $usuarioService;
    protected $ruaService;
    protected $cidadeService;
    protected $estadoService;
    protected $paisService;

    public function __construct(UsuarioService $usuarioService, RuaService $ruaService, CidadeService $cidadeService, EstadoService $estadoService, PaisService $paisService)
    {
        $this->usuarioService = $usuarioService;
        $this->ruaService = $ruaService;
        $this->cidadeService = $cidadeService;
        $this->estadoService = $estadoService;
        $this->paisService = $paisService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('usuarios.index');
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
            'nome_usuario' => 'required|string|max:255',
            'sobrenome_usuario' => 'required|string|max:255',
            'usuario' => 'required|string|unique:usuario|max:255',
            'senha_usuario' => 'required|string|min:8',
            'email_usuario' => 'required|email|max:255',
            'tipo_usuario' => ['required', new Enum(TipoUsuario::class)],
            'numero_residencia' => 'required|string|max:255',
            'cpf_usuario' => 'required|string|max:255',
            'nome_rua' => 'required|string|max:255',
            'cep_rua' => 'required|string|max:255',
            'nome_cidade' => 'required|string|max:255',
            'sigla_cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'sigla_estado' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'sigla_pais' => 'required|string|max:255'
        ]);
        $this->paisService->create($validatedData);
        $this->estadoService->create($validatedData);
        $this->cidadeService->create($validatedData);
        $this->ruaService->create($validatedData);
        $usuario = $this->usuarioService->Create($validatedData);

        return response()->json($usuario);
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
    public function update(Usuario $usuario)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
    }
}
