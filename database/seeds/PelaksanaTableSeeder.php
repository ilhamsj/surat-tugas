<?php

use App\Pelaksana;
use Illuminate\Database\Seeder;

class PelaksanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pelaksana::class, 20)->create();
    }
}
