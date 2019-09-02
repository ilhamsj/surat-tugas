<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Undangan;
use Faker\Generator as Faker;

$factory->define(Undangan::class, function (Faker $faker) {
    return [
        'perihal' => $faker->word,
    ];
});
