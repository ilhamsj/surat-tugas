<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $fillable = [
        'pelaksana_id', 'judul', 'deskripsi',
    ];
}
