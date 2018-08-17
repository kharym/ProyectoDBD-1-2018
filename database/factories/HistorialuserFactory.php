<?php

use Faker\Generator as Faker;

$factory->define(App\Historialuser::class, function (Faker $faker) {
    return [
        'descripcion' => str_random(150),
	  	'fechaHistorial'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaHistorial'=> '10:00',
    ];
});
