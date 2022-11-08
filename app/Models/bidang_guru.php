<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidang_guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_bidang',
        
    ];
    protected $table = 'bidang_guru';
    public function guru(){
        return $this->hasMany('App\Models\guru','bidang');
    }
}
