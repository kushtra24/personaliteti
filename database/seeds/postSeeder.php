<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Simple post",
            'user_id' => "1",
	        'content' => "Content of a simple post",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
