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
        'bidang',
        'JK',
        
    ];
    protected $table = 'guru';
    public function kelasss(){
        return $this->hasMany('App\Models\kelas','walas');
    }
}
