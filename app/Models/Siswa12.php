<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa12 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kelas',
        'nisn',
        'nama',
        'JK',
    ];
    protected $table = 'siswa12';
    public function kelas(){
        return $this->belongsTo('App\Models\Kelas')->withPivot('kelass');
    }
    public function Input12rpl1(){
        return $this->hasMany('App\Models\input12rpl1','nama');
    }
}
