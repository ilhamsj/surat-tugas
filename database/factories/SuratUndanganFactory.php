<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\SuratUndangan;
use Faker\Generator as Faker;

$factory->define(SuratUndangan::class, function (Faker $faker) {
    return [
        'admin_id' => $faker->numberBetween($min = 1, $max = 5),
        'pengundang' => $faker->company,
        // 'no_surat' => $faker->buildingNumber,
        // 'nama_acara' => $faker->name,
        // 'perihal' => $faker->name,
        // 'waktu' => $faker->dateTime,
        // 'tempat' => $faker->streetAddress(),
        'file' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
