<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bentuk_pelanggaran',
        'Skor_sanksi',
    ];
    protected $table = 'pelanggaran';
    public function Siswa(){
        return $this->hasMany('App\Models\Siswa','id_Pelanggaran');
    }
    public function Siswa11(){
        return $this->hasMany('App\Models\Siswa11','id_Pelanggaran');
    }
    public function Siswa12(){
        return $this->hasMany('App\Models\Siswa12','id_Pelanggaran');
    }
}
