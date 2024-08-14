<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function pais():BelongsTo {
        return $this->belongsTo(Pais::class, 'id_pais');
    }

    public function cidade():HasMany {
        return $this->hasMany(Cidade::class);
    }
}
