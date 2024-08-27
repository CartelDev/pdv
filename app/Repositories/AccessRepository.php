<?php 

namespace App\Repositories;

use App\Models\Usuario;

class AccessRepository {

    public function auth(array $data) {
        if (Usuario::where('email_usuario', $data['email_usuario'])->where('senha_usuario', $data['senha_usuario'])->exists()) {
            return true;
        } 
        return false;
    }

}