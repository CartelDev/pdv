<?php

namespace App\Services;

use App\Repositories\EstadoRepository;
use App\Repositories\PaisRepository;

class EstadoService {
    protected $estadoRepository;
    protected $paisRepository;

    public function __construct(EstadoRepository $estadoRepository, PaisRepository $paisRepository)
    {
        $this->estadoRepository = $estadoRepository;
        $this->paisRepository = $paisRepository;
    }

    public function create(array $estado) {
        return $this->estadoRepository->create($this->getEstado($estado));
    }

    public function getEstado(array $estado) {
        $est['pais'] = $estado['pais'];
        $est['estado'] = $estado['estado'];
        $est['sigla_estado'] = "SP";

        return $est;
    }
}