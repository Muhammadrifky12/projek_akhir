<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa12 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
    ];
    protected $table = 'siswa12';
}
