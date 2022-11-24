<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gurutatib extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_nama',
        
    ];
    protected $table = 'guru_tatib';
    public function gurutatib(){
        return $this->belongsTo('App\Models\guru','nama');
    }
}
