<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $fillable = [
        'pegawai_id', 
        'undangan_id', 
        'penanda_tangan_id',
        'no_surat'
    ];

    public function SuratUndangan() {
        return $this->hasMany(SuratUndangan::class);
    }
}
