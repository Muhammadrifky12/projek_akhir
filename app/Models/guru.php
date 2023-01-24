<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nip',
        'JK',
        
    ];
    protected $table = 'guru';
    public function kelasss(){
        return $this->hasMany('App\Models\kelas','id');
    }
    public function gurubk(){
        return $this->hasMany('App\Models\gurubk','id');
    }
    public function gurutatib(){
        return $this->hasMany('App\Models\gurutatib','id');
    }
}
