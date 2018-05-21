<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Drug::class, function (Faker $faker) {
    

    return [
        'name' => $faker->name,
        'image' => $faker->sentence(3),
        'description' => $faker->text(),
        'qtycarton' => $faker->randomNumber(),
        'qtypack' => $faker->randomDigit,
        'price' =>  $faker->numberBetween($min = 1000, $max = 9000),
        'delivery' => $faker->city,
        'supplier' =>$faker->name,
        'voucher'=> $faker->numberBetween(0,5000),
        'expire_on'=> $faker->dateTime($max = 'now')->format('Y-m-d'),
        'manufacturer'=> $faker->name,
        'produce_at'=>$faker->dateTime(), 
        'destination'=>$faker->city,
        'cost_carton'=>$faker->numberBetween($min = 200, $max = 1259),
        'cost_pack'=>$faker->numberBetween($min = 10, $max = 125),
        'receipt_no'=>$faker->numberBetween(0000,99999),
        'in_store' =>$faker->numberBetween(4,5000),

        
    ];
});
