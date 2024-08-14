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
        $this->rua->save($rua);
    }

    public function findByName(string $rua) {
        return $this->rua->where('nome_rua', $rua)->first();
    }
}