<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class tipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipis')->insert([
            'type' => "INTJ",
	        'name' => "Arkitect",
	        'description' => "This is a short description of the Arcitect",
	        'type_img' => "intj.png",
	        'featured_Image' => "intj-feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFJ",
	        'name' => "Arkitect",
	        'description' => "This is a short description of the Arcitect",
	        'type_img' => "INFJ.png",
	        'featured_Image' => "INFJ-feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
