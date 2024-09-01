<?php
namespace App\Repositories;

use App\Models\Meios_Pagamento;

class Meios_PagamentoRepository {

    protected $meios_pagamento;

    public function __construct(Meios_Pagamento $meios_pagamento)
    {
        $this->meios_pagamento = $meios_pagamento;
    }

    public function create(array $data) {
        return $this->meios_pagamento->save($data);
    }

    public function findOrfail(string $id) {
        return $this->meios_pagamento->findOrFail($id);
    }
}