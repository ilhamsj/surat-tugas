<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $fillable = [
        'id_pegawai', 'id_undangan',
    ];

    public function SuratUndangan() {
        return $this->hasMany(SuratUndangan::class);
    }
}
