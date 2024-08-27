<?php

namespace App\Services;

use App\Repositories\PaisRepository;

class PaisService {
    protected $paisRepository;

    public function __construct(PaisRepository $paisRepository)
    {
        $this->paisRepository = $paisRepository;
    }

    public function create(array $pais) {
        return $this->paisRepository->create($this->getPais($pais));
    }

    public function getPais(array $pais) {
        $pa['pais'] = $pais['pais'];
        $pa['sigla_pais'] = "BR";

        return $pa;
    }
}