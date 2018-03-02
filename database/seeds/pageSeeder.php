<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class pageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title' => "Rreth nesh",
            'slug' => "Rreth nesh",
	        'content' => "<p>Content of a simple post</p>",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
