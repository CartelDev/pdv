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
        $this->cidade = new Cidade($cidade);
        $this->cidade->nome_cidade = $cidade['nome_cidade'];
        $this->cidade->sigla_cidade = $cidade['sigla_cidade'];
        $this->cidade->observacao_cidade = "nada a declarar";
        $this->cidade->id_estado = $cidade['id_estado'];
        return $this->cidade->save();
    }

    public function findByName(string $cidade) {
        return $this->cidade->where('nome_cidade', $cidade)->first();
    }
}