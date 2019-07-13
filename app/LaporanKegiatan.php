<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanKegiatan extends Model
{
    protected $fillable = [
        'surat_tugas_id',
        'pegawai_id',
        'content',
    ];

    public function SuratTugas() {
        return $this->belongsTo(SuratTugas::class, 'surat_tugas', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'pegawai_id', 'id');
    }
}
