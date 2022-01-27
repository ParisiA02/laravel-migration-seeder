<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'dateofbirth' => $faker -> dateTime(),
        'genre' => $faker ->word()
    ];
});
