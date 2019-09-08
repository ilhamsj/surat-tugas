<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Dokumentasi;
use Faker\Generator as Faker;

$factory->define(Dokumentasi::class, function (Faker $faker) {
    return [
        'pelaksana_id' => $faker->numberBetween($min = 1, $max = 20),
        'judul' => $faker->realText($maxNbChars = 100, $indexSize = 2), 
        'deskripsi' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
