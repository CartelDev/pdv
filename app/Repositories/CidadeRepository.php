<?php

namespace App\Repositories;

use App\Models\Cidade;

Class CidadeRepository {
    protected $cidade;

    public function __construct(Cidade $cidade)
    {
        $this->cidade = $cidade;
    }

    public function create(array $cidade) {
        $this->cidade->create($cidade);
    }

    public function findByName(string $cidade) {
        return $this->cidade->where('nome_cidade', $cidade)->first();
    }
}