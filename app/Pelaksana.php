<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelaksana extends Model
{
    protected $fillable = [
        'surat_tugas_id', 'user_id'
    ];
}
