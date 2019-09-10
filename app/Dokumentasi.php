<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $fillable = [
        'pelaksana_id', 'judul', 'deskripsi',
    ];

    public function pelaksana()
    {
        return $this->belongsTo(Pelaksana::class);
    }
}
