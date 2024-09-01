<?php 

namespace App\Repositories;

use App\Models\Venda;

class VendaRepository
{
    protected $venda, $caixaRepository;

    public function __construct(Venda $venda, CaixaRepository $caixaRepository) {
        $this->caixaRepository = $caixaRepository;
        $this->venda = $venda;
    }

    public function create(array $data) {
        $caixa = $this->caixaRepository->findOrfail($data['id_caixa']);
        $this->venda = $this->venda->create($data);
        $this->venda->caixa()->associate($caixa);
        $this->venda->save();
        return $this->venda;
    }

    public function findOrfail(string $id) {
        return $this->venda->findOrfail($id);
    }
}