<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bentukpelanggaran',
        'id_jenis',
        'skor',
    ];
    protected $table = 'pelanggaran';
    public function pelanggaran(){
        return $this->belongsTo('App\Models\jenispelanggaran','id_jenis');
    }
}
