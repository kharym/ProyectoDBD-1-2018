<?php

use Faker\Generator as Faker;

$factory->define(App\Asiento::class, function (Faker $faker) {
    return [
        'vuelo_id' => rand(1,10),
	  	'disponibilidad' => 'true',
	  	'numeroAsiento' => $faker->numberBetween($min = 1, $max = 100),
	  	'tipoAsiento' => $faker->numberBetween($min = 1, $max = 4),
    ];
});
