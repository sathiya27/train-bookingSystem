<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'seatNumber'=>null,
            'price'=>40.00,
            'coach_id'=>null,
        ];
    }

    public function withSeatNumber(string $seatNumber)
    {
        return $this->state([
            'seatNumber' => $seatNumber,
        ]);
    }
}
