<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gugatan extends Model
{
    protected $fillable = [
        'nomor_perkara',
        'klasifikasi_perkara',
        'penggugat',
        'kuasahukum_penggugat',
        'tergugat',
        'kuasahukum_tergugat',
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
