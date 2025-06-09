<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan (ram)
    protected $table = 'ram';  // Nama tabel RAM di dalam database `belajar_laravel`

    // Tentukan field yang bisa diisi (mass-assignment)
    protected $fillable = [
        'merkRAM',
        'hargaRAM',
        'tersedia',
        'berat'
    ];
}
