<?php

namespace App\Repositories;

//importação dos pacotes de repositorios

use App\Enum\TipoUsuario;

//importação dos pacotes de modelo
use App\Models\Usuario;

Class UsuarioRepository {
    
    // importação dos modelos
    protected $usuario;
    
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function create(array $data, string $tipo) {
        $this->usuario = new Usuario();
        $this->usuario->tipo_usuario = TipoUsuario::from($tipo);
        $this->usuario->fill($data);
        $this->usuario->usuario_ativo = false;
        $this->usuario->save($data);
    }

    public function findById(string $id) {
        $this->usuario->findById($id);
    }
}