<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'estado', 
        'sigla_estado',
        'observacao_estado' 
    ];

    protected $hidden = [
        'id_estado',
        'created_at',
        'updated_at'
    ];

    public function pais():HasOne {
        return $this->hasOne(Pais::class);
    }

    public function cidade():HasMany {
        return $this->hasMany(Cidade::class);
    }
}
