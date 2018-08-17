<?php

use Faker\Generator as Faker;

$factory->define(App\ProveedorAuto::class, function (Faker $faker) {
    return [
        'nombreProveedorAuto' => $faker->name,
        'telefono' => $faker->e164PhoneNumber,
        'correo' => $faker->safeEmail,
    ];
});