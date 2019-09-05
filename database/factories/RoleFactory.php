<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'name' => $faker->randomElement(['pegawai', 'admin_bagian', 'admin_kepegawaian']),
    ];
});
