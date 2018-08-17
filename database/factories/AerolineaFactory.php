<?php

use Faker\Generator as Faker;

$factory->define(App\Aerolinea::class, function (Faker $faker) {
    return [
 
	  	'nombreAerolinea' => $faker->name,
	  	'tipoAerolinea'=> $faker->numberBetween($min = 1, $max = 3),
	  	'calificacion' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
