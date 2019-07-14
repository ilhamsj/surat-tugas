<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SuratUndangan;
use Faker\Generator as Faker;

$factory->define(SuratUndangan::class, function (Faker $faker) {
    return [
        'admin_id' => $faker->numberBetween($min = 1, $max = 5),
        'no_surat' => $faker->buildingNumber,
        'pengundang' => $faker->company,
        'perihal' => $faker->name,
        'nama_acara' => $faker->name,
        'tempat' => $faker->streetAddress(),
        'waktu_mulai' => $faker->dateTime,
        'waktu_selesai' => $faker->dateTime,
        'file' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
