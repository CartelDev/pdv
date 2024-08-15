<?php

namespace App\Services;

class Meios_PagamentoService {

    protected $meios_pagamentoRepository;

    public function __construct(Meios_PagamentoRepository $meios_pagamentoRepository)
    {
        $this->meios_pagamentoRepository = $meios_pagamentoRepository;
    }

    public function create(array $data) {
        $this->meios_pagamentoRepository->create($data);
    }
}