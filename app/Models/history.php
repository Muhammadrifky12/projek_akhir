<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_siswa',
        'tanggal',
        'Bentuk_pelanggaran',
        'skor',
        'penanganan',
        
    ];
    protected $table = 'history';
    public function history(){
        return $this->belongsTo('App\Models\Siswa','id');
    }
    public function penanganan1(){
        return $this->belongsTo('App\Models\guru','penanganan');
    }
    public function pena(){
        return $this->belongsTo('App\Models\guru','penanganan');
    }
}
