<?php

use Faker\Generator as Faker;

$factory->define(App\Traslado::class, function (Faker $faker) {
    return [
        'compra_id' => rand(1,10),
        'proveedor_traslado_id' => rand(1,10),
        'ubicacion_id' => rand(1,10),
	  	'precioTraslado'=> $faker->numberBetween($min = 5000, $max = 30000),
	  	'planificacionParadas'=> str_random(200),
	  	'numeroParadas'=> $faker->numberBetween($min = 1, $max = 10),
	  	'totalPasajeros'=> $faker->numberBetween($min = 1, $max = 10),
	  	'fechaTraslado'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaTraslado'=> '10:00',
	  	
    ];
});