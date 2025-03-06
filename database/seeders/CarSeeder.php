<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cars = [
            [
                'make' => 'Toyota', 
                'model' => 'Corolla', 
                'year' => 2020, 
                'miles' => 30000, 
                'image' => 'cars/toyota.jpeg'
            ],
            [
                'make' => 'Honda', 
                'model' => 'Civic', 
                'year' => 2019, 
                'miles' => 40000, 
                'image' => 'cars/honda-civic.jpeg'
            ],
            [
                'make' => 'Ford', 
                'model' => 'Focus', 
                'year' => 2018, 
                'miles' => 50000, 
                'image' => 'cars/ford-focus.jpeg'
            ],
            [
                'make' => 'Chevrolet', 
                'model' => 'Malibu', 
                'year' => 2021, 
                'miles' => 25000, 
                'image' => 'cars/chevrolet-malibu.jpeg'
            ],
            [
                'make' => 'BMW', 
                'model' => 'X5', 
                'year' => 2022, 
                'miles' => 15000, 
                'image' => 'cars/bmw xs.jpeg'
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
