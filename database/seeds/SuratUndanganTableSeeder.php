<?php

use Illuminate\Database\Seeder;
use App\SuratUndangan;

class SuratUndanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SuratUndangan::class, 5)->create();
    }
}
