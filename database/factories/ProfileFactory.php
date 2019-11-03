<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'nombre'   => $faker->firstName($gender = 'male' | 'female'),
        'apellido' => $faker->lastName,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'telefon'  => $faker->tollFreePhoneNumber,
        'facebook' => $faker->userName,
        'instagram' => $faker->userName,
        'web'      => $faker->url,

    ];
});
