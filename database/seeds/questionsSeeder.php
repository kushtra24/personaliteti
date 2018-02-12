<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class questionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Questions')->insert([
            'question' => "question one",
	        'purpose' => "extroIntro",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "question two",
	        'purpose' => "extroIntro",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "question three",
	        'purpose' => "extroIntro",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "question four",
	        'purpose' => "extroIntro",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
