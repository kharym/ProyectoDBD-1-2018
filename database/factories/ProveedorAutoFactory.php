<?php

use Faker\Generator as Faker;

$factory->define(App\ProveedorAuto::class, function (Faker $faker) {
    return [
        'nombreProveedorAuto' => $faker->name,
        'telefono' => str_random(15),
        'correo' => $faker->safeEmail,
    ];
});