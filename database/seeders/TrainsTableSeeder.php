<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {

            $train = new Train();
            $train->agency = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure_date = $faker->date('Y-m-d');
            $train->departure_time = $faker->time('H:i');
            $train->arrival_date = $faker->date('Y-m-d');
            $train->arrival_time = $faker->time('H:i');
            $train->train_code = $faker->isbn10();
            $train->number_of_carriage = $faker->numberBetween(1, 20);
            $train->in_time = $faker->boolean(true);
            $train->deleted = $faker->boolean(false);
            $train->save();
        }
    }
}
