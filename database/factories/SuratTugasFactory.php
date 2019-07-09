<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SuratTugas;
use Faker\Generator as Faker;

$factory->define(SuratTugas::class, function (Faker $faker) {
    return [
        'pegawai_id' => $faker->numberBetween(1,5),
        'undangan_id' => $faker->numberBetween(1,5),
        'penanda_tangan_id' => $faker->numberBetween(1,5),
        'no_surat' => $faker->numberBetween($min = 1000, $max = 2000),
    ];
});
