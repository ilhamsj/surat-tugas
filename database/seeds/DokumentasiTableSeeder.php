<?php

use Illuminate\Database\Seeder;
use App\Dokumentasi;

class DokumentasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dokumentasi::class, 10)->create();
    }
}
