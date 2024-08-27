<?php

namespace App\Repositories;

use App\Models\Rua;

Class RuaRepository {
    protected $rua;

    public function __construct(Rua $rua)
    {
        $this->rua = $rua;
    }

    public function create(array $rua) {
        $this->rua = new Rua();
        $this->rua->nome_rua = $rua['nome_rua'];
        $this->rua->cep_rua = $rua['cep_rua'];
        $this->rua->id_cidade = $rua['id_cidade'];
        $this->rua->observacao_rua = "Nada a Declarar denovo";
        return $this->rua->save();
    }

    public function findByName(string $rua) {
        return $this->rua->where('nome_rua', $rua)->first();
    }
}