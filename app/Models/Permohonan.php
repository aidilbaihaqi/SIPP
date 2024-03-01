<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $fillable = [
        'nomor_perkara',
        'klasifikasi_perkara',
        'pemohon',
        'kuasahukum_pemohon',
        'termohon',
        'kuasahukum_termohon',
        'status_perkara',
        'lama_proses',
        'tanggal_sidang',
        'jam',
        'agenda',
        'ruangan',
        'hasil_sidang'
    ];

    use HasFactory;
}
