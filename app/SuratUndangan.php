<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratUndangan extends Model
{
    protected $table = 'surat_undangan';
    protected $fillable = [
        'admin_id',
        'pengundang',
        'no_surat',
        'nama_acara',
        'perihal',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
        'file',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    public function surat_tugas() 
    {
        return $this->hasMany(SuratTugas::class, 'undangan_id', 'id');
    }
}

    // return $this->hasOne('Model::class', 'foreign_key', 'local_key');
