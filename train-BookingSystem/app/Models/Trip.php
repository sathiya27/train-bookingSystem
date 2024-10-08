<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public function Train()
    {
        return $this->belongsTo(Train::class);
    }

    public function seatReservations()
    {
        return $this->hasMany(SeatReservation::class);
    }
}
