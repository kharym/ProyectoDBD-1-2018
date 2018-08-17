<?php

use Faker\Generator as Faker;

$factory->define(App\Aeropuerto::class, function (Faker $faker) {
    return [
        'ubicacion_id' => rand(1,10),
	  	'nombreAeropuerto' => $faker->name,
	  	'tipoAeropuerto'=> $faker->numberBetween($min = 1, $max = 3),
	  	'calificacion' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
