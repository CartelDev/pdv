<?php

namespace App\Services;

class PermissaoService {
    protected $permissaoRepository;

    public function __construct(PermissaoRepository $permissaoRepository) {
        $this->permissaoRepository = $permissaoRepository;
    }

    public function create(array $data) {
        return $this->permissaoRepository->create($data);
    }

    public function addPermition(array $data) {
        return $this->permissaoRepository->addPermitionToUser($data);
    }
}