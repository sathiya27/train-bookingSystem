<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatReservation extends Model
{
    use HasFactory;

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

    public function booking()
    {
        $this->belongsTo(Booking::class);
    }
}
