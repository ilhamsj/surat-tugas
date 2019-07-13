<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LaporanKegiatan;
use Faker\Generator as Faker;

$factory->define(LaporanKegiatan::class, function (Faker $faker) {
    return [
        'surat_tugas_id'=> $faker->numberBetween(1,5),
        'pegawai_id'=> $faker->numberBetween(1,5),
        'content'=> $faker->text($maxNbChars = 50),
    ];
});
