<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = [
        'id_cliente',
        'created_at',
        'updated_at'
    ];

    public function usuario():HasOne {
        return $this->hasOne(Usuario::class);
    }

    public function permissao():BelongsToMany {
        return $this->belongsToMany(Permissao::class);
    }
}
