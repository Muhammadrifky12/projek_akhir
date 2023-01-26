<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenispelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenisku',
    ];
    protected $table = 'jenispelaggaran';
    public function kelas1(){
        return $this->hasMany('App\Models\Pelanggaran','id');
    }
}
