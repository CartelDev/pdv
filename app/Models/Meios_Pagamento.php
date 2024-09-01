<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meios_Pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'meio_pagamento',
        'descricao_meio_pagamento',
        'status_meio_pagamento'
    ];

    protected $hidden = [
        'id_meio_pagamento',
        'created_at',
        'updated_at'
    ];

    public function pagamento():HasMany {
        return $this->hasMany(Pagamento::class);
    }
}
