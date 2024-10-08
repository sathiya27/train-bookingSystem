<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function seatReservations()
    {
        return $this->hasMany(SeatReservation::class);
    }

    
}
