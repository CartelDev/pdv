<?php

namespace App\Services;

use App\Models\Permissao;
use App\Models\Usuario;
use App\Repositories\UsuarioRepository;

class PermissaoRepository {
    protected $permissao;
    protected $usuario;

    protected $usuarioRepository; 

    public function __construct(Permissao $permissao, Usuario $usuario, UsuarioRepository $usuarioRepository) {
        $this->permissao = $permissao;
        $this->usuario = $usuario;
        $this->usuarioRepository = $usuarioRepository;
    }

    public function create(array $data) {
        return $this->permissao->save($data);
    }

    public function addPermitionToUser(array $data) {
        $this->usuario = $this->usuario->findOrFail($data['id_usuario']);
        $this->usuario->permissoes()->attach($data['id_permissao']);
        return $this->usuario;
    }
}