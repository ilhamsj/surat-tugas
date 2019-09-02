<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelaksana extends Model
{
    protected $fillable = [
        'surat_tugas_id', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function SuratTugas()
    {
        return $this->belongsTo(SuratTugas::class);
    }
}
