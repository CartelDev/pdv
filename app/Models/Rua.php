<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rua extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome_rua',
        'cep_rua', 
        'observacao_rua'
    ];
    
    protected $hidden = [
        'id_rua',
        'created_at',
        'updated_at',
    ];

    public function cidade():HasOne {
        return $this->hasOne(Cidade::class);
    }

    public function usuario():BelongsToMany {
        return $this->belongsToMany(Usuario::class);
    }
}
