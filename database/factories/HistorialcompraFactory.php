<?php

use Faker\Generator as Faker;

$factory->define(App\Historialcompra::class, function (Faker $faker) {
    return [
        'compra_id' => rand(1,10),
        'fechaCompra'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaCompra'=> '10:00',
	  	'tipoCompra' => $faker->numberBetween($min = 1, $max = 5),
	  	'metodoDePago'=> $faker->numberBetween($min = 1, $max = 3),
	  	'monto'=> $faker->numberBetween($min = 10000, $max = 10000000),
	  	'descripcion'=> str_random(200),
	  	
    ];
});
