<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SuratUndangan;

class SuratTugas extends Model
{
    protected $table = 'surat_tugas';

    protected $fillable = [
        'pegawai_id', 
        'undangan_id', 
        'penanda_tangan_id',
        'no_surat'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'pegawai_id', 'id');
    }

    public function undangan() {
        return $this->belongsTo(SuratUndangan::class, 'undangan_id', 'id');
    }
}
