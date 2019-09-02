<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SuratTugas;
use Faker\Generator as Faker;

$factory->define(SuratTugas::class, function (Faker $faker) {
    return [
        'undangan_id' => $faker->numberBetween($min = 1, $max = 20),
        'nomor' => $faker->word,
    ];
});
