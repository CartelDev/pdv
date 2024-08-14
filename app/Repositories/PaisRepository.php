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
        $this->pais->save($pais);
    }

    public function findByName(string $pais) {
        return $this->pais->where('pais', $pais)->first();
    }
}