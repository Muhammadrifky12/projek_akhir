<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa12rpl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kelas',
        'nisn',
        'nama',
        'JK',
    ];
    protected $table = 'siswa12rpl2';
    public function kelas6(){
        return $this->belongsTo('App\Models\Kelas','kelass');
    }
    public function Input12rpl2(){
        return $this->hasMany('App\Models\input12rpl2','nama');
    }
}
