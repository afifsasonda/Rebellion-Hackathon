<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisketerampilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function keterampilan(){
        return $this->belongsTo(Keterampilan::class,'jenis_keterampilan_id','id');
    }
}
