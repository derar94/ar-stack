<?php

use Illuminate\Database\Seeder;

class ChanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory("App\chanel",1000)->create();
    }
}
