<?php

use Faker\Generator as Faker;

$factory->define(App\ProveedorTraslado::class, function (Faker $faker) {
    return [
        'nombreProveedorTraslado' => $faker->name,
        'telefono' => str_random(15),
        'correo' => $faker->safeEmail,
    ];
});
