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
        'url_bukti',
    ];
}
