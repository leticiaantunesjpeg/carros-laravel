<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'car_id' => 1,
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-05',
        ]);

        Reservation::create([
            'car_id' => 2,
            'start_date' => '2023-10-01',
            'end_date' => '2023-10-10',
        ]);

        Reservation::create([
            'car_id' => 3,
            'start_date' => '2023-11-01',
            'end_date' => '2023-11-15',
        ]);
    }
}
