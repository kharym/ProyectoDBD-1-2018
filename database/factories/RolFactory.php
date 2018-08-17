<?php

use Faker\Generator as Faker;

$factory->define(App\Rol::class, function (Faker $faker) {
    return [
        'nombreRol' => $faker->name,
        'descripcion' => str_random(150),
    ];
});
