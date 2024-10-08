<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function seats()
    {
        return $this->hasMany(seat::class);
    }
}
