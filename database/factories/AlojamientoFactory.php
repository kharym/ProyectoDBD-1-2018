<?php

use Faker\Generator as Faker;

$factory->define(App\Alojamiento::class, function (Faker $faker) {
    return [
        'ubicacion_id' => rand(1,10),
	  	'nombreAlojamiento' => $faker->name,
	  	'calificacion' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
