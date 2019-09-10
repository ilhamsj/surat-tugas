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
        'name' => $faker->name,
        'email' => $faker->unique()->freeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'nip' => $faker->bankAccountNumber,
        'jabatan' => $faker->jobTitle,
        'role' => $faker->randomElement(['admin_bagian', 'admin_kepegawaian', 'pegawai']),
        'golongan' => $faker->randomElement(['I/a', 'I/b', 'I/c', 'I/d']),
        'nama_golongan' => $faker->randomElement(['Juru Tingkat 1', 'Juru', 'Juru Muda Tingkat 1', 'Juru Muda']),
    ];
});
