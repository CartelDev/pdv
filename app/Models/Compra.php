<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compra extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'data_compra'
    ];

    protected $hidden = [
        'id_compra',
        'created_at',
        'updated_at'
    ];

    public function produtos(): BelongsToMany {
        return $this->belongsToMany(Produtos::class);
    }
}
