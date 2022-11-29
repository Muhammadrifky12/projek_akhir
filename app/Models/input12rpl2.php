<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input12rpl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'skor',
    ];
    protected $table = 'input12rpl2';
    public function Input12rpl2(){
        return $this->belongsTo('App\Models\Siswa12rpl2','nama');
    }
}
