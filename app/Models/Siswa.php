<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'id_kelas',
        'JK',
        'skor',
    ];
    protected $table = 'siswa';
    public function kelas1(){
        return $this->belongsTo('App\Models\Kelas','kelass');
    }
    public function Input10rpl1(){
        return $this->hasMany('App\Models\input10rpl1','nama');
    }
}
