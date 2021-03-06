<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory("App\question",10)->create()->each(function($q){
            $q->answers()->saveMany(factory('App\answer',10)->make());
        });
    }
}
