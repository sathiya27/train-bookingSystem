<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coach>
 */
class CoachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'coachNumber'=> null,
            'train_id'=> null,
        ];
    }

    public function withCoachNumber(string $coachNumber)
    {
        return $this->state([
            'coachNumber' => $coachNumber,
        ]);
    }
}
