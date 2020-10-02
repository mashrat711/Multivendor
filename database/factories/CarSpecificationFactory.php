<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car_specification;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Car_specification::class, function (Faker $faker) {
    return [
        'overview' => $faker->paragraph,
        'short_description'=> $faker->text,
        'displacement'=> $faker->latitude($min = -90, $max = 90),
        'power_kw'=> $faker->randomDigit,
        'power_hp'=> $faker->randomDigit,
        'number_of_cylinder'=> $faker->randomDigit ,
        'fuel_consumption_urban'=> $faker->randomDigit ,
        'fuel_consumption_nonurban'=> $faker->randomDigit ,
        'co2_emission'=> $faker->randomDigit,
        'length'=> $faker->randomDigit,
        'width'=> $faker->randomDigit,
        'height'=> $faker->randomDigit,
        'wheelbase'=> $faker->latitude($min = -90, $max = 90),
        'drag_co_efficient'=> $faker->randomDigit,
        'unladen_weight_eu'=> $faker->randomDigit,
        'type'=> $faker->word,
        'seat'=> $faker->randomDigit,
        'flexibility'=> $faker->latitude($min = -90, $max = 90),
        'status'=> $faker->word,
        'system'=> $faker->word,
        'min_year'=> $faker->year($max = 'now'),
        'max_year'=> $faker->year($max = 'now'),
        'speed'=> $faker->randomDigit ,
        'acceleration'=> $faker->latitude($min = -90, $max = 90),
        'in_gear_acceleration'=> $faker->randomDigit ,
        'car_model_id'=> 1 , 'car_brand_id'=> 1 ,

        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});
