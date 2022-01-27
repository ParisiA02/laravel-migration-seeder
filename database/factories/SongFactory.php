<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'duration' => $faker -> numberBetween(30, 600),
        'reproductions' => $faker -> numberBetween(0,99999),
    ];
});
