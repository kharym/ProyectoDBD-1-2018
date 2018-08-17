<?php

use Faker\Generator as Faker;

$factory->define(App\Rol::class, function (Faker $faker) {
    return [
        'nombreRol' => $faker->name,
        'descripcion' => $faker->text,
    ];
});
