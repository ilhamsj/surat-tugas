<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip', 'name', 'jabatan', 'email', 'password', 'role', 'golongan', 'nama_golongan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pelaksana()
    {
        return $this->hasMany(Pelaksana::class);
    }
    
    public function Pangkat()
    {
        return $this->hasMany(Pangkat::class);
    }

    public function SuratTugas()
    {
        return $this->hasManyThrough('App\Comment', 'App\Post');
    }
}
