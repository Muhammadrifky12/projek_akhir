<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input11rpl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'skor',
    ];
    protected $table = 'input11rpl2';
    public function Input11rpl2(){
        return $this->belongsTo('App\Models\Siswa11rpl2','nama');
    }
}
