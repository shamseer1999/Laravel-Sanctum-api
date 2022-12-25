<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                'car_name' =>'Tesla',
                'model' =>2022,
                'user_id' =>1,
            ],
            [
                'car_name' =>'Ferari',
                'model' =>2021,
                'user_id' =>1,
            ],
            [
                'car_name' =>'Bugatti',
                'model' =>2017,
                'user_id' =>1,
            ],
            [
                'car_name' =>'Tesla',
                'model' =>2021,
                'user_id' =>2,
            ],
            [
                'car_name' =>'Rolls Roys',
                'model' =>2022,
                'user_id' =>2,
            ],
            [
                'car_name' =>'Porche',
                'model' =>2022,
                'user_id' =>3,
            ],
            [
                'car_name' =>'Jagor',
                'model' =>2020,
                'user_id' =>3,
            ],
            [
                'car_name' =>'Maclaren',
                'model' =>2022,
                'user_id' =>4,
            ],
            [
                'car_name' =>'Jagor',
                'model' =>2022,
                'user_id' =>4,
            ],
            [
                'car_name' =>'Rolls Roys',
                'model' =>2021,
                'user_id' =>5,
            ],
        ];
    }
}
