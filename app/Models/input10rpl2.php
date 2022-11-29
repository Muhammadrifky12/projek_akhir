<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input10rpl2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'skor',
    ];
    protected $table = 'input10rpl2';
    public function Input10rpl2(){
        return $this->belongsTo('App\Models\Siswa10rpl2','nama');
    }
}
