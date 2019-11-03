<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    $title = $faker->sentence(4);
    return [

        'user_id'     => rand(1, 6),
        'category_id' => rand(1, 4),
        'name'        => $title,
        'slug'        => Str::slug($title),
        'excerpt'      => $faker->text(200),
        'body'        => $faker->text(500),
        'status'      => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'file'        => $faker->imageUrl($width = 1200, $height = 400),
        'zip'         => $faker->text(100),
        'price'       => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 500),
        'cripto'      => $faker->unixTime($max = 'now'),
    ];
});
