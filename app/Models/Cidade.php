<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome_cidade', 
        'sigla_cidade', 
        'observacao_cidade'
    ];

    protected $hidden = [
        'id_cidade',
        'created_at',
        'updated_at',
    ];

    public function estado():HasOne {
        return $this->hasOne(Estado::class);
    }

    public function rua():HasMany {
        return $this->hasMany(Rua::class);
    }
}
