<?php

namespace App\Services;

use App\Repositories\RuaRepository;
use App\Repositories\UsuarioRepository;
use Illuminate\Support\Facades\Hash;

Class UsuarioService {
    protected $usuarioRepository;
    protected $ruaRepository;

    public function __construct(UsuarioRepository $usuarioRepository, RuaRepository $ruaRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->ruaRepository = $ruaRepository;
    } 

    public function Create(array $data) {
        $data['senha_usuario'] = hash::make($data['senha_usuario']);
        return $this->usuarioRepository->create($this->getUsuario($data));
    }

    public function getUsuario(array $user) {
        $usuario['rua'] = $this->ruaRepository->findByName($user['nome_rua']);
        $usuario['nome_usuario'] = $user['nome_usuario'];
        $usuario['sobrenome_usuario'] = $user['sobrenome_usuario'];
        $usuario['usuario'] = $user['usuario'];
        $usuario['senha_usuario'] = $user['senha_usuario'];
        $usuario['email_usuario'] = $user['email_usuario'];
        $usuario['numero_residencia'] = $user['numero_residencia'];
        $usuario['cpf_usuario'] = $user['cpf_usuario'];

        return $usuario;
    }
}