<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagamento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'data_pagamento',
        'valor_pagamento'
    ];

    protected $hidden = [
        'id_pagamento',
        'created_at',
        'updated_at'
    ];

    public function vendas(): BelongsToMany {
        return $this->belongsToMany(Venda::class, 'venda_pagamento');
    }

    public function meio_pagamento(): HasOne {
        return $this->hasOne(Meios_Pagamento::class);
    }
}
