<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_keterampilan_id',
    ];

    public function user(){
        return $this->belongsToMany(User::class,'relasi_keterampilan_id','keterampilan_id','user_id');
    }

    public function jenisketerampilans(){
        return $this->hasMany(Jenisketerampilan::class,'jenis_keterampilan_id','id');
    }
}
