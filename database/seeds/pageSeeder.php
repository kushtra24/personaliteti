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
            'slug' => "rreth_nesh",
	        'content' => "<p>Content of a simple post</p>",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Teoria jone",
            'slug' => "teoria_jone",
            'content' => "<p>Content of a simple post</p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Politikat privatesise",
            'slug' => "politikat_privatesise",
            'content' => "<p>Content of a simple post</p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('pages')->insert([
            'title' => "Rreth nesh",
            'slug' => "faqe",
            'content' => "<p>Content of a simple post</p>",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
