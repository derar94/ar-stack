<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(ChanelSeeder::class);

        $this->call(User::class);


    }
}
