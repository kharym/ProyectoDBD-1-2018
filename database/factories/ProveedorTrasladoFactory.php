<?php

use Faker\Generator as Faker;

$factory->define(App\ProveedorTraslado::class, function (Faker $faker) {
    return [
        'nombreProveedorTraslado' => $faker->name,
        'telefono' =>$faker->e164PhoneNumber,
        'correo' => $faker->safeEmail,
    ];
});
