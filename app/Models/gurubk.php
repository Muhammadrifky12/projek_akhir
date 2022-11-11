<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gurubk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        
    ];
    protected $table = 'guru_bk';
    public function gurubk(){
        return $this->belongsTo('App\Models\guru','nama');
    }
}
