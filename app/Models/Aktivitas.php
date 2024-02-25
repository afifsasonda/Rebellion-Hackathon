<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'gambar',
    ];

    public function user(){
        return $this->belongsTo(User::class,'aktivitas_id','id');
    }
}
