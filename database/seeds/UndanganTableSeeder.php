<?php

use App\Undangan;
use Illuminate\Database\Seeder;

class UndanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Undangan::class, 20)->create();
    }
}
