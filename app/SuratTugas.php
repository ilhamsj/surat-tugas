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

    public function Pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }

    public function Pelaksana()
    {
        return $this->hasMany(Pelaksana::class);
    }
}
