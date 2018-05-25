<?php

use Faker\Generator as Faker;

$factory->define(\App\Suscriptor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'dni' => $faker->randomNumber(8),
        'sexo' => $faker->randomElement(['M','F']),
        'email' => $faker->safeEmail,
        'sms' =>  $faker->randomNumber(9),
        'direccion' => $faker->address
    ];
});
