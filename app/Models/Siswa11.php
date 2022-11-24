<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa11 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'id_kelas',
        'JK',
    ];
    protected $table = 'siswa11';
    public function kelas3(){
        return $this->belongsTo('App\Models\Kelas','kelass');
    }
}
