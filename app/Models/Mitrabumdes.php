<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitrabumdes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_usaha', 'deskripsi', 'roi', 'roa', 'roe', 'gpm', 'opm', 'npm', 'valuasi'
    ];
}
