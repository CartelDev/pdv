<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permissao extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome_permissao',
        'tabela_referencia',
        'inserir',
        'atualizar',
        'excluir'
    ];

    protected $hidden = [
        'id_permissao',
        'created_at',
        'updated_at',
    ];

    public function cargo(): BelongsToMany {
        return $this->belongsToMany(Cargo::class);
    }

    public function cliente():BelongsToMany {
        return $this->belongsToMany(Cliente::class);
    }
}
