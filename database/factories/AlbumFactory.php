<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'release_date' => $faker -> dateTime(),
        'songs' => $faker -> numberBetween(5,20),
    ];
});
