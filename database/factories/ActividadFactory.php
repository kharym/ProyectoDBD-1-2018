<?php

use Faker\Generator as Faker;

$factory->define(App\Actividad::class, function (Faker $faker) {
    return [

	    'compra_id' => rand(1,10),
	  	'nombreActividad' => $faker->name,
	  	'precioActividad'=> $faker->numberBetween($min = 10000, $max = 1000000),
	  	'descripcion' => $faker->text,
	  	'numeroNinos' => $faker->numberBetween($min = 0, $max = 100),
	  	'numeroAdultos'=> $faker->numberBetween($min = 0, $max = 100),
	  	'fechaInicio'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaInicio'=> $faker->time(),
	  	'fechaTermino'=> $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
	  	'horaTermino'=> $faker->time(),
	
    ];
});


