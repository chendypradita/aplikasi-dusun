<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // Menambahkan properti $fillable untuk menghindari Mass Assignment
    protected $fillable = [
        'nama',
        'alamat',
        'nomor_telepon',
    ];
}
