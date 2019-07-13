<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\SuratTugas;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nip', 'golongan', 'jabatan', 'eselon', 'telp', 'role'
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

    public function surat_undangan() 
    {
        return $this->hasMany(SuratUndangan::class, 'admin_id', 'id');
    }
    
    public function surat_tugas() 
    {
        return $this->hasMany(SuratTugas::class, 'pegawai_id', 'id');
    }

    public function LaporanKegiatan() 
    {
        return $this->hasMany(LaporanKegiatan::class, 'pegawai_id', 'id');
    }
}
