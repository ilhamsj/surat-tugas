<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $fillable = [
        'pengundang',
        'nomor',
        'perihal',
        'tempat',
        'waktu'
    ];
}
