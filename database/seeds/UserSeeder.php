<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory("App\User",10)->create()->each(function($q){
            $q->questions()->saveMany(factory('App\question',100)->make());
        });
    }
}
