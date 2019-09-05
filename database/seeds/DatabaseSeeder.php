<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UndanganTableSeeder::class);
        $this->call(SuratTugasTableSeeder::class);
        $this->call(PelaksanaTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
