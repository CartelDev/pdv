<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        
    ];

    protected $hidden = [
        'id_funcionario',
        'created_at',  
        'updated_at'
    ];

    public function usuario():HasOne {
        return $this->hasOne(Usuario::class);
    }

    public function caixa():HasMany {
        return $this->hasMany(Caixa::class);
    }

    public function cargo():HasOne {
        return $this->hasOne(Cargo::class);
    }
}
