<?php

use Faker\Generator as Faker;

$factory->define(App\Historialuser::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->text,
	  	'fechaHistorial'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaHistorial'=> $faker->time(),
    ];
});
