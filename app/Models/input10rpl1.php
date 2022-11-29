<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input10rpl1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'skor',
    ];
    protected $table = 'input10rpl1';
    public function Input10rpl1(){
        return $this->belongsTo('App\Models\Siswa','nama');
    }
}
