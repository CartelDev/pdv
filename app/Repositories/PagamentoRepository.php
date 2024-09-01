<?php 

namespace App\Repositories;

use App\Models\Pagamento;
use App\Models\Venda;

class PagamentoRepository {
    protected $pagamento;
    protected $meios_PagamentoRepository;
    protected $vendaRepository;

    public function __construct(Pagamento $pagamento, Meios_PagamentoRepository $meios_PagamentoRepository, VendaRepository $vendaRepository)
    {
        $this->pagamento = $pagamento;
        $this->meios_PagamentoRepository = $meios_PagamentoRepository;
        $this->vendaRepository = $vendaRepository;
    }

    public function create(array $data) {
        $venda = $this->vendaRepository->findOrfail($data['id_venda']);
        $meio = $this->meios_PagamentoRepository->findOrfail($data['id_meios_pagamento']);
        $this->pagamento->data_pagamento = $data['data_pagamento'];
        $this->pagamento->valor_pagamento = $data['valor_pagamento'];
        $this->pagamento->meio_pagamento()->associate($meio);
        $this->pagamento->venda()->associate($venda);
        return $this->pagamento->save($this->pagamento->toArray());
    }
}