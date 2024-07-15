<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caixa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'data_abertura',
        'data_fechamento',
        'valor_abertura',
        'valor_fechamento'
    ];

    protected $hidden = [
        'id_caixa',
        'created_at',
        'updated_at'
    ];

    public function funcionario(): HasOne {
        return $this->hasOne(Funcionario::class);
    }

    public function vendas(): HasMany {
        return $this->hasMany(Venda::class);
    }
}
