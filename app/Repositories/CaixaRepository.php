<?php 

namespace App\Repositories;

class CaixaRepository {

    protected $Caixa;

    public function __construct($Caixa) {
        $this->Caixa = $Caixa;
    }

    public function create(array $data) {
        return $this->Caixa->create($data);
    }

    public function findOrfail(string $id) {
        return $this->Caixa->findOrfail($id);
    }
}