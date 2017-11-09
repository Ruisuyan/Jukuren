<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'nombres' => $faker->firstName,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
        'codigo' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'dni' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'correo' => $faker->email,
        'telefono' => $faker->randomNumber($nbDigits = 9, $strict = true)
    ];
});
