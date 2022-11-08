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
    ];
    protected $table = 'siswa';
    public function kelas1(){
        return $this->belongsTo('App\Models\Kelas','kelas_id');
    }
}
