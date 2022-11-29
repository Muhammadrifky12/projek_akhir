<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input11rpl1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'skor',
    ];
    protected $table = 'input11rpl1';
    public function Input11rpl1(){
        return $this->belongsTo('App\Models\Siswa11','nama');
    }
}
