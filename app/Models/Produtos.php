<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
    use HasFactory, SoftDeletes;

    protected $filled = [
        'nome_produto',
        'preco_compra',
        'preco_venda',
        'descricao_produto',
        'estoque_atual',
        'estoque_minimo',
    ];

    protected $hidden = [
        'id_produto',
        'created_at',
        'updated_at'
    ];

    public function vendas():BelongsToMany {
        return $this->belongsToMany(Venda::class);
    }

    public function compras():BelongsToMany {
        return $this->belongsToMany(Compra::class);
    }
}
