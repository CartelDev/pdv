<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome_usuario',
        'sobrenome_usuario',
        'usuario',
        'senha_usuario',
        'email_usuario',
        'numero_residencia',
        'cpf_usuario',
        'usuario_ativo',
    ];

    protected $hidden = [
        'id_usuario',
        'created_at',
        'updated_at',
    ];

    public function rua():BelongsToMany {
        return $this->belongsToMany(Rua::class);
    }

    public function funcionario():HasMany {
        return $this->hasMany(Funcionario::class);
    }
}
