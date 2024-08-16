<?php 

namespace App\Enum;

enum TipoUsuario: string
{
    case ADMIN = 'admin';
    case CLIENTE = 'cliente';
    case FUNCIONARIO = 'funcionario';
}