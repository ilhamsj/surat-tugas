<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $fillable = [
        'undangan_id', 'nomor', 'paraf_id'
    ];

    public function Undangan()
    {
        return $this->belongsTo(Undangan::class);
    }

    public function Paraf()
    {
        return $this->belongsTo(User::class, 'paraf_id', 'id');
    }

    public function Pelaksana()
    {
        return $this->hasMany(Pelaksana::class);
    }
}
