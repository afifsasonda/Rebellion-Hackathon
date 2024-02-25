<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'prodi',
        'avatar',
        'alamat',
        'pengalaman_id',
        'aktivitas_id',
        'keterampilan_id',
        'phone',
        'description',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function pengalamans(){
        return $this->hasMany(Pengalaman::class,'pengalaman_id','id');
    }

    public function ativitass(){
        return $this->hasMany(Aktivitas::class,'aktivitas_id','id');
    }

    public function keterampilans(){
        return $this->hasMany(Keterampilan::class,'keterampilan_id','id');
    }
}
