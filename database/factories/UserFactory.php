<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nip' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'name' => $faker->name,
        // 'golongan' => $faker->randomElement(['IA','IB','IIA', 'IIB', 'IIIA', 'IIIB', 'IVA', 'IVB', 'VA']),
        'golongan' => $faker->randomElement(['I', 'II', 'III', 'IV', 'V']),
        'jabatan' => $faker->jobTitle,
        'eselon' => $faker->unique()->randomDigit,
        'telp' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'role' => $faker->randomElement(['pegawai','admin_bagian','admin_kepegawaian']),
    ];
});
