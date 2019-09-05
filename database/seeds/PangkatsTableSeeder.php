<?php

use App\Pangkat;
use Illuminate\Database\Seeder;

class PangkatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pangkat::class, 3)->create();
    }
}
