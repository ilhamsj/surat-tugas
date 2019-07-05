<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratUndangan extends Model
{
    protected $table = 'surat_undangan';
    protected $fillable = [
        'pengundang',
        'no_surat',
        'nama_acara',
        'perihal',
        'waktu',
        'tempat',
        'file',
        'admin_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}

    // return $this->hasOne('Model::class', 'foreign_key', 'local_key');
