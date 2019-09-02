<?php

use App\SuratTugas;
use Illuminate\Database\Seeder;

class SuratTugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SuratTugas::class, 20)->create();
    }
}
