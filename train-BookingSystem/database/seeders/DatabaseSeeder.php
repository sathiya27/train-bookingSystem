<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Seat;
use App\Models\Coach;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         // States array
         $states = [
            'Johor', 'Kelantan', 'Melaka', 'Negeri Sembilan', 
            'Pahang', 'Perak', 'Penang', 'Selangor', 
            'Kuala Lumpur', 'Putrajaya'
        ];

        // Create trains
        Train::factory(10)->create()->each(function ($train) use ($states) {
            foreach (range('A', 'F') as $coachLetter) {
                $coach = Coach::factory()->withCoachNumber($coachLetter)->for($train)->create();
                foreach (range(1, 20) as $seatNumber) {
                    Seat::factory()->for($coach)->withSeatNumber($seatNumber)->create();
                }
            }

            shuffle($states); // Shuffle the states

            $trips = []; // Initialize an empty array to hold trip data
            $randomMinute = random_int(0, 59);
            $departureTime = Carbon::createFromTime(6, $randomMinute);

            // Create trip records
            for ($i = 0; $i < count($states); $i++) {
                $trips[] = [
                    'destinationName' => $states[$i],
                    'depatureTime' => $departureTime->copy()->addHours($i * 2), // Incrementing hours based on the index
                    'arivalTime' => $departureTime->copy()
                        ->addHours($i * 2 + 2)
                        ->setMinutes(random_int(0, 59)), 
                    'train_id' => $train->id
                ];
            }

            DB::table('trips')->insert($trips);
        });
    }
        
}

