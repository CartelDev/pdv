<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'data_venda'
    ];

    protected $hidden = [
        'id_venda', 
        'created_at',
        'updated_at'
    ];

    public function caixa(): HasOne {
        return $this->hasOne(Caixa::class);
    }

    public function produtos(): BelongsToMany {
        return $this->belongsToMany(Produtos::class);
    }

    public function pagamentos(): BelongsToMany {
        return $this->belongsToMany(Pagamento::class);
    }
}
