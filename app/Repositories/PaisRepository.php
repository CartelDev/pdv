<?php

namespace App\Repositories;

use App\Models\Pais;

Class PaisRepository {
    protected $pais;

    public function __construct(Pais $pais) 
    {
        $this->pais = $pais;
    }

    public function create(array $pais) {
        $this->pais->pais = $pais['pais'];
        $this->pais->sigla_pais = $pais['sigla_pais'];
        $this->pais->observacao_pais = "Nada a Declarar";
        return $this->pais->save();
    }

    public function findByName(string $pais) {
        return $this->pais->where('pais', $pais)->first();
    }
}