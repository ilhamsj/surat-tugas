<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SuratUndangan;
use Faker\Generator as Faker;

$factory->define(SuratUndangan::class, function (Faker $faker) {
    return [
        'admin_id' => $faker->randomDigit,
        'pengundang' => $faker->company,
        'no_surat' => $faker->buildingNumber,
        'nama_acara' => $faker->name,
        'perihal' => $faker->name,
        'waktu' => $faker->dateTime,
        'tempat' => $faker->streetAddress(),
        'file' => $faker->url,
    ];
});
