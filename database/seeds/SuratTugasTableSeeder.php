<?php

use Illuminate\Database\Seeder;
use App\SuratTugas;

class SuratTugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SuratTugas::class, 5)->create();
    }
}
