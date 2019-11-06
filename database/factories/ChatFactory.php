<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Chat::class, function (Faker $faker) {
    return [
        'user_id'       => rand(1, 5),
        'title'         => $faker->text(50),
        'description'   => $faker->text(200),
        'url'           => $faker->url
    ];
});
