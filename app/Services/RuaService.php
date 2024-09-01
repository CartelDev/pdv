<?php

namespace App\Services;

use App\Repositories\CidadeRepository;
use App\Repositories\RuaRepository;

class RuaService {
    protected $ruaRepository;
    protected $cidadeRepository;

    public function __construct(RuaRepository $ruaRepository, CidadeRepository $cidadeRepository)
    {
        $this->ruaRepository = $ruaRepository;
        $this->cidadeRepository = $cidadeRepository;
    }
    public function create(array $rua) {
        return $this->ruaRepository->create($this->getRua($rua));
    }

    public function getRua(array $rua) {
        $r['id_cidade'] = $this->cidadeRepository->findByName($rua['nome_cidade'])['id_cidade'];
        $r['nome_rua'] = $rua['nome_rua'];
        $r['cep_rua'] = $rua['cep_rua'];
        
        return $r;
    }
}