<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cargo',
        'descricao_cargo'
    ];

    protected $hidden = [
        'id_cargo',
        'created_at',
        'updated_at'
    ];

    public function funcionarios(): HasMany
    {
        return $this->hasMany(Funcionario::class);
    }

    public function permissao():BelongsToMany {
        return $this->belongsToMany(Permissao::class);
    }
}
