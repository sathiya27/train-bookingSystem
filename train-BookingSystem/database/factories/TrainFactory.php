<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $malaysiaStates = [
            'Johor', 'Kelantan', 'Melaka', 'Negeri Sembilan', 
            'Pahang', 'Perak', 'Penang','Selangor', 'Kuala Lumpur', 
            'Putrajaya'
        ];

        return [
            'trainNumber'=> $this->faker->unique()->regexify('[A-Z]{2}[0-9]{3}'),
            'currentDestination'=> $this->faker->randomElement($malaysiaStates),
        ];
    }
}
