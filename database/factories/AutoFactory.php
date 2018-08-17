<?php

use Faker\Generator as Faker;

$factory->define(App\Auto::class, function (Faker $faker) {
    return [
       	'compra_id' => rand(1,10),
       	'proveedor_auto_id' => rand(1,10),
	  	'patente' => str_random(8),
	  	'precio'=> $faker->numberBetween($min = 300000, $max = 1000000),
	  	'marca' => $faker->text(15),
	  	'modelo' => $faker->text(20),
	  	'fechaArriendo'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaArriendo'=> $faker->time(),
	  	'fechaDevolucion'=> $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
	  	'horaDevolucion'=> $faker->time(),
    ];
});
