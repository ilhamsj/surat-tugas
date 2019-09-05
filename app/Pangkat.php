<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $fillable = [
        'user_id', 'nama'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
