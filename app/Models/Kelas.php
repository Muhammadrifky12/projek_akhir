<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kelass',
        'walas',
        'gurubk',
    ];
    protected $table = 'kelas';
    public function kelas1()
    {
        return $this->hasMany('App\Models\Siswa', 'id');
    }
    public function kelasss()
    {
        return $this->belongsTo('App\Models\guru', 'walas');
    }
    public function kel()
    {
        return $this->belongsTo('App\Models\gurubk', 'gurubk');
    }
    public function bk()
    {
        return $this->belongsTo('App\Models\guru', 'gurubk');
    }
}