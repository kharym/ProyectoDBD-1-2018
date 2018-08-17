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

    	'historialuser_id' => rand(1,10),
    	'rol_id' => rand(1,10),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
        'dni_Pasaporte'=> $faker->numberBetween($min = 00000, $max = 99999),
        'fondos'=> $faker->numberBetween($min = 0000000, $max = 9999999),
        'remember_token' => str_random(10),
    ];
});
