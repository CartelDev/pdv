<?php

namespace App\Repositories;

use App\Models\Estado;
use App\Models\Pais;

Class EstadoRepository {
    protected $estado;
    protected $paisRepository;

    public function __construct(Estado $estado, PaisRepository $paisRepository) 
    {
        $this->estado = $estado;
        $this->paisRepository = $paisRepository;
    }

    public function create(array $estado) {
        $est = new Estado();
        $est->estado = $estado['estado'];
        $est->sigla_estado = $estado['sigla_estado'];
        $est->observacao_estado = "nada a declarar";
        $est->id_pais = $this->paisRepository->findByName($estado['pais'])['id_pais'];
        return $est->save();
    }

    public function findByName(string $estado) {
        return $this->estado->where('estado', $estado)->first();
    }
}