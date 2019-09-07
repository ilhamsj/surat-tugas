<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Undangan;
use Faker\Generator as Faker;

$factory->define(Undangan::class, function (Faker $faker) {
    return [
        'pengundang'    => $faker->company,
        'nomor'         => $faker->swiftBicNumber,
        'perihal'       => $faker->catchPhrase,
        'tempat'        => $faker->address,
        'waktu'         => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
