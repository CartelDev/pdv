<?php 

namespace App\Services;

use App\Repositories\AccessRepository;
use Illuminate\Support\Facades\Hash;

class AccessService {
    protected $accessRepository;

    public function __construct(AccessRepository $accessRepository) {
        $this->accessRepository = $accessRepository;
    }

    public function auth(array $data) {
        $data['senha_usuario'] = Hash::make($data['senha_usuario']);
        if ($this->accessRepository->auth($data)) {
            return true;
        }
        return false;
    }
}