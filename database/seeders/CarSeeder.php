<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create(['model' => 'Model S', 'brand' => 'Tesla', 'year' => 2020, 'price_per_day' => 200]);
        Car::create(['model' => 'Mustang', 'brand' => 'Ford', 'year' => 2019, 'price_per_day' => 150]);
    }
}

