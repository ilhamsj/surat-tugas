<?php

use Illuminate\Database\Seeder;
use App\LaporanKegiatan;

class LaporanKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LaporanKegiatan::class, 5)->create();
    }
}
