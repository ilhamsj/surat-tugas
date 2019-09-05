<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $fillable = [
        'user_id', 'pangkat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
