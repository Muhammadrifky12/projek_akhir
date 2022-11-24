<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa11rpl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kelas',
        'nisn',
        'nama',
        'JK',
    ];
    protected $table = 'siswa11rpl2';
    public function kelas4(){
        return $this->belongsTo('App\Models\Kelas','kelass');
    }
}
