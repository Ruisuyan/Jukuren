<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'codigo' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'nombres' => $faker->firstName,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,        
        'email' => $faker->email,
        'oficina' => $faker->numerify('E###'),
        'telefono' => $faker->randomNumber($nbDigits = 9, $strict = true),        
    ];
});
