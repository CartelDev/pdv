<?php

namespace App\Services;

use App\Repositories\CidadeRepository;
use App\Repositories\EstadoRepository;

class CidadeService {
    protected $cidadeRepository;
    protected $estadoRepository;

    public function __construct(CidadeRepository $cidadeRepository, EstadoRepository $estadoRepository)
    {
        $this->cidadeRepository = $cidadeRepository;   
        $this->estadoRepository = $estadoRepository;
    }

    public function create(array $cidade) {
        return $this->cidadeRepository->create($this->getCidade($cidade));
    }

    public function getCidade(array $cidade) {
        $cid['id_estado'] = $this->estadoRepository->findByName($cidade['estado'])['id_estado'];
        $cid['nome_cidade'] = $cidade['nome_cidade'];
        $cid['sigla_cidade'] = "AA";

        return $cid;
    }
}