<?php

namespace App\Models;

use App\Models\Cargo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'last_paternal_name',
        'last_maternal_name',
        'dni',
        'cargo_id',
        'file',
        'status',
    ];
    public function cargo(): BelongsTo
    {
        return $this->belongsTo(
            related: Cargo::class,
            foreignKey: 'cargo_id',
        );
    }
}
