<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Undangan;
use Faker\Generator as Faker;

$factory->define(Undangan::class, function (Faker $faker) {
    return [
        'pengundang'    => $faker->company,
        'tipe'          => $faker->randomElement(['Surat Undangan', 'Nota Dinas']),
        'nomor'         => $faker->swiftBicNumber,
        'acara'         => $faker->catchPhrase,
        'perihal'       => $faker->bs,
        'tempat'        => $faker->address,
        'waktu'         => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
