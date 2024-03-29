<?php

use Faker\Generator as Faker;

$factory->define(App\Compra::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
	  	'descripcion' => $faker->text(),
	  	'monto'=> $faker->numberBetween($min = 300000, $max = 3000000),
	  	'fechaCompra'=> $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
	  	'horaCompra'=> $faker->time(),
    ];
});
