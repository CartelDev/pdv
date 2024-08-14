<?php

namespace App\Services;

use App\Repositories\FuncionarioRepository;

class FuncionarioService {
    protected $funcionarioRepository;

    public function __construct(FuncionarioRepository $funcionarioRepository)
    {
        $this->funcionarioRepository = $funcionarioRepository;
    }

    public function create(array $data) {
        return $this->funcionarioRepository->create($data);
    }
}
