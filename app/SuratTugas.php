<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $fillable = [
        'id_pegawai', 'id_undangan',
    ];
}
