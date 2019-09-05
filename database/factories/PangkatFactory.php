<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pangkat;
use Faker\Generator as Faker;

$factory->define(Pangkat::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'nama' => $faker->randomElement(['kakanwil', 'kabag', 'kasubag']),
    ];
});
