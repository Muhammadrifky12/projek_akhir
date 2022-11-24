<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bentuk_pelanggaran',
        'skor_sanksi',
        'tanggal',
        'guru',
        
    ];
    protected $table = 'kelas';
}
