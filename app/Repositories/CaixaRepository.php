<?php 

namespace App\Repositories;

use App\Models\Caixa;

class CaixaRepository {

    protected $caixa;

    public function __construct(Caixa $caixa) {
        $this->caixa = $caixa;
    }

    public function create(array $data) {
        return $this->caixa->save($data);
    }

    public function findOrfail(string $id) {
        return $this->caixa->findOrfail($id);
    }

    public function update(array $data) {
        return $this->caixa->update($data);
    }
}