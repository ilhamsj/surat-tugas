<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $fillable = [
        'pengundang',
        'nomor',
        'tipe',
        'acara',
        'perihal',
        'tempat',
        'waktu'
    ];
}
