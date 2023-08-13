<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belanjadesa extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan',
        'anggaran',
        'realisasi',
        'selisih',
        'jenis',
    ];
}
