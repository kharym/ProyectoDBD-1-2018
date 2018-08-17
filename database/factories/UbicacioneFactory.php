<?php

use Faker\Generator as Faker;

$factory->define(App\Ubicacione::class, function (Faker $faker) {
    return [
        
        'latitud'=> str_random(15),
        'longitud'=> str_random(15),
        'ciudad'=> $faker->name,
        'pais'=> $faker->name,
        'calleUbicacion'=> $faker->name,
	  	'numeroUbicacion'=> $faker->numberBetween($min = 00001, $max = 99999),
	  	'codigoPostal'=>  $faker->numberBetween($min = 00000, $max = 99999),
    ];
});
