<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gurutatib extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',

    ];
    protected $table = 'guru_tatib';
    public function gurutatib()
    {
        return $this->belongsTo('App\Models\guru', 'nama');
    }
    // public function penanganan1(){
    //     return $this->hasMany('App\Models\history','id');
    // }
}
