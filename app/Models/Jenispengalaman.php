<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenispengalaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function pengalaman(){
        return $this->belongsTo(Pengalaman::class,'jenis_pengalaman_id','id');
    }
}
