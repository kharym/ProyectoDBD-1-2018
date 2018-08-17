<?php

use Faker\Generator as Faker;

$factory->define(App\Paquete::class, function (Faker $faker) {
    return [
 
	  	'precioDescuento'=> $faker->numberBetween($min = 1000, $max = 100000),
	  	'tipoPaquete'=> $faker->numberBetween($min = 1, $max = 5),
	  	'precioNormal'=> $faker->numberBetween($min = 100000, $max = 10000000),
	  	'descripcion' => $faker->text,
	  
    ];
});
