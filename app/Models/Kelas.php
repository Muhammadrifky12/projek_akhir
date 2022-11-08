<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kelas_id',
        'walas',
    ];
    protected $table = 'kelas';
    public function kelas1(){
        return $this->hasMany('App\Models\Siswa','id_kelas');
    }
    public function kelas2(){
        return $this->hasMany('App\Models\Siswa10rpl2','id_kelas');
    }
    public function kelas3(){
        return $this->hasMany('App\Models\Siswa11','id_kelas');
    }
    public function kelas4(){
        return $this->hasMany('App\Models\Siswa11rpl2','id_kelas');
    }
    public function Siswa12(){
        return $this->hasMany('App\Models\Siswa12','id_kelas');
    }
    public function kelas6(){
        return $this->hasMany('App\Models\Siswa12rpl2','id_kelas');
    }
    public function kelasss(){
        return $this->hasMany('App\Models\guru','nama');
    }
}
