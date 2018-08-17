<?php

use Faker\Generator as Faker;

$factory->define(App\Habitacione::class, function (Faker $faker) {
    return [
        'compra_id' => rand(1,10),
        'alojamiento_id' => rand(1,10), //App\Alojamiento::all()->random()->id,
	  	'precioHabitacion'=> $faker->numberBetween($min = 50000, $max = 1000000),
	  	'calificacion'=> $faker->numberBetween($min = 1, $max = 5),
	  	'numeroAdultos'=> $faker->numberBetween($min = 1, $max = 2),
	  	'numeroNinos' => $faker->numberBetween($min = 0, $max = 3),
	  	'tipoHabitacion' => $faker->numberBetween($min = 1, $max = 3),
	  	'fechaIngreso'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaIngreso'=> $faker->time(),
	  	'fechaSalida'=> $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
	  	'horaSalida'=> $faker->time(),
    ];
});
