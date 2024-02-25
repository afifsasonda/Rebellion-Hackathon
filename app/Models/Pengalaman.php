<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'posisi',
        'jenis_pengalaman_id',
        'lokasi',
        'durasi',
        'deskripsi'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'relasi_pengalaman','pengalaman_id','user_id');
    }

    public function jenispengalamans(){
        return $this->hasMany(Jenispengalaman::class,'jenis_pengalaman_id','id');
    }
}


