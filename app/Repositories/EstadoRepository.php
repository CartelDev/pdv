<?php

namespace App\Repositories;

use App\Models\Estado;

Class EstadoRepository {
    protected $estado;

    public function __construct(Estado $estado)
    {
        $this->estado = $estado;
    }

    public function create(array $estado) {
        $this->estado->save($estado);
    }

    public function findByName(string $estado) {
        return $this->estado->where('estado', $estado)->first();
    }
}