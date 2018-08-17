<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
    return [
        'compra_id' => rand(1,10),
        'aerolinea_id' => rand(1,10),
        'aeropuertoOrigen_id' => rand(1,10),
        'aeropuertoDestino_id' => rand(1,10),
        'tipoVuelo'=> $faker->numberBetween($min = 1, $max = 3),
        'precioVuelo'=> $faker->numberBetween($min = 100000, $max = 1000000),
        'numeroEscala'=> $faker->numberBetween($min = 0, $max = 3),
        'cantidadEquipaje'=> $faker->numberBetween($min = 1, $max = 3),
	  	'fechaPartida'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaPartida'=> $faker->time(),
	  	'fechaRegreso'=> $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
	  	'horaRegreso'=> $faker->time(),
    ];
});
