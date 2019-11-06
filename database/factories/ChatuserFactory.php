<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Chatuser::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 5),
        'name'    => $faker->userName
    ];
});
