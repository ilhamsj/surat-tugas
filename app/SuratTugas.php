<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    protected $fillable = [
        'undangan_id', 'nomor',
    ];

    public function Undangan()
    {
        return $this->belongsTo(Undangan::class);
    }
}
