<?php 

namespace App\Services;

use App\Repositories\CaixaRepository;

class CaixaService {
    protected $caixaRepository;

    public function __construct(CaixaRepository $caixaRepository) {
        $this->caixaRepository = $caixaRepository;
    }

    public function create(array $data) {
        return $this->caixaRepository->create($data);
    }
}