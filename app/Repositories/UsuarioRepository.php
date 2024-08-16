<?php

namespace App\Repositories;

//importação dos pacotes de repositorios

use App\Enum\TipoUsuario;
use App\Repositories\RuaRepository;
use App\Repositories\CidadeRepository;
use App\Repositories\EstadoRepository;
use App\Repositories\PaisRepository;

//importação dos pacotes de modelo
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Pais;
use App\Models\Rua;
use App\Models\Usuario;

Class UsuarioRepository {
    
    // importação dos modelos
    protected $usuario;
    
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function create(array $data, string $tipo) {
        $this->usuario->tipo_usuario = TipoUsuario::from($tipo);
        return $this->usuario->save($data);
    }

    public function findById(string $id) {
        $this->usuario->findById($id);
    }
}