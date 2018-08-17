<?php

use Faker\Generator as Faker;

$factory->define(App\Auto::class, function (Faker $faker) {
    return [
       	'compra_id' => rand(1,10),
       	'proveedor_auto_id' => rand(1,10),
	  	'patente' => str_random(10),
	  	'precio'=> $faker->numberBetween($min = 300000, $max = 1000000),
	  	'marca' => str_random(15),
	  	'modelo' => str_random(20),
	  	'fechaArriendo'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaArriendo'=> '10:00',
	  	'fechaDevolucion'=> $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
	  	'horaDevolucion'=> '18:00',
    ];
});
