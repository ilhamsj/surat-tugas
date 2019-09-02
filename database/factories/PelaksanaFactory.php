<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pelaksana;
use Faker\Generator as Faker;

$factory->define(Pelaksana::class, function (Faker $faker) {
    return [
        'surat_tugas_id' => $faker->numberBetween($min = 1, $max = 20),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
