<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input12rpl1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'skor',
    ];
    protected $table = 'input12rpl1';
    public function Input12rpl1(){
        return $this->belongsTo('App\Models\Siswa12','nama');
    }
}
