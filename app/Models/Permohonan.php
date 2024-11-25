<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'warga_id',
        'keluhan',
    ];

    // Relasi dengan Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
