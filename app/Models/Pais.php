<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pais extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pais', 
        'sigla_pais',
        'observacao_pais' 
    ];

    protected $hidden = [
        'id_pais',
        'created_at',
        'updated_at'
    ];

    public function estado(): HasMany {
        return $this->hasMany(Estado::class);
    }
}
