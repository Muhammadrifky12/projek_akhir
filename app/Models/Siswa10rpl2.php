<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa10rpl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'id_kelas',
        'JK',
    ];
    protected $table = 'siswa10rpl2';
    public function kelas2(){
        return $this->belongsTo('App\Models\Kelas','kelass');
    }
    public function Input10rpl2(){
        return $this->hasMany('App\Models\input10rpl2','nama');
    }
}
