<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rental::create([
            'car_id' => 1,
            'start_date' => '2023-06-01',
            'end_date' => '2023-06-10',
        ]);

        Rental::create([
            'car_id' => 2,
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-05',
        ]);

        Rental::create([
            'car_id' => 3,
            'start_date' => '2023-08-01',
            'end_date' => '2023-08-15',
        ]);
    }
}
