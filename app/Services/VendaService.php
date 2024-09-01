<?php 

namespace App\Services;

use App\Repositories\VendaRepository;

class VendaService {
    protected $vendaRepository;

    public function __construct(VendaRepository $vendaRepository) {
        $this->vendaRepository = $vendaRepository;
    }

    public function create(array $venda) {
        return $this->vendaRepository->create($venda);
    }
}