<?php

namespace Database\Seeders;

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
        //\App\Models\Car::create();
        // \App\Models\User::factory(10)->create();
        DB::table('cars')->insert([
            [
                'car_name' =>'Tesla',
                'model' =>2022,
                'user_id' =>1,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Ferari',
                'model' =>2021,
                'user_id' =>1,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Bugatti',
                'model' =>2017,
                'user_id' =>1,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Tesla',
                'model' =>2021,
                'user_id' =>2,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Rolls Roys',
                'model' =>2022,
                'user_id' =>2,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Porche',
                'model' =>2022,
                'user_id' =>3,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Jagor',
                'model' =>2020,
                'user_id' =>3,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Maclaren',
                'model' =>2022,
                'user_id' =>4,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Jagor',
                'model' =>2022,
                'user_id' =>4,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
            [
                'car_name' =>'Rolls Roys',
                'model' =>2021,
                'user_id' =>5,
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],
        ]);
    }
}
