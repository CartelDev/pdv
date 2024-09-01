<?php 

namespace App\Services;

use App\Repositories\PagamentoRepository;
use App\Repositories\VendaRepository;
use App\Repositories\Meios_PagamentoRepository;

class PagamentoService {
    protected $pagamentoRepository;
    protected $meios_PagamentoRepository;
    protected $vendaRepository;

    public function __construct(PagamentoRepository $pagamentoRepository, Meios_PagamentoRepository $meios_PagamentoRepository, VendaRepository $vendaRepository) {
        $this->pagamentoRepository = $pagamentoRepository;
        $this->meios_PagamentoRepository = $meios_PagamentoRepository;
        $this->vendaRepository = $vendaRepository;
    }

    public function create(array $pagamento) {
        return $this->pagamentoRepository->create($pagamento);
    }
}