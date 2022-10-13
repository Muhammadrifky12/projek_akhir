<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran_kerajinan extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bentuk_pelanggaran',
        'Skor_sanksi',
    ];
    protected $table = 'pelanggaran_kerajinan';
}
