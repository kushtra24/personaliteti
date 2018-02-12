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
	        'name' => "Arkitekti",
	        'description' => "This is a short description of the Arkitekti",
	        'type_img' => "intj.png",
	        'featured_Image' => "intj-feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFJ",
	        'name' => "KËSHILLUESI",
	        'description' => "This is a short description of the KËSHILLUESI",
	        'type_img' => "INFJ.png",
	        'featured_Image' => "INFJ-feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISTJ",
            'name' => "INSPEKTORI",
            'description' => "This is a short description of the INSPEKTORI",
            'type_img' => "ISTJ.png",
            'featured_Image' => "ISTJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISFJ",
            'name' => "mbrojtësi",
            'description' => "This is a short description of the mbrojtësi",
            'type_img' => "ISFJ.png",
            'featured_Image' => "ISFJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INTP",
            'name' => "FILOZOFЁT",
            'description' => "This is a short description of the FILOZOFЁT",
            'type_img' => "INTP.png",
            'featured_Image' => "INTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFP",
            'name' => "NDËRMJETËSUESI",
            'description' => "This is a short description of the NDËRMJETËSUESI",
            'type_img' => "INFP.png",
            'featured_Image' => "INFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISTP",
            'name' => "I SHKATHËTI",
            'description' => "This is a short description of the I SHKATHËTI",
            'type_img' => "ISTP.png",
            'featured_Image' => "ISTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISFP",
            'name' => "aventurierët",
            'description' => "This is a short description of the aventurierët",
            'type_img' => "ISFP.png",
            'featured_Image' => "ISFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENTJ",
            'name' => "KOMANDANTI",
            'description' => "This is a short description of the KOMANDANTI",
            'type_img' => "ENTJ.png",
            'featured_Image' => "ENTJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENFJ",
            'name' => "Protagonistët",
            'description' => "This is a short description of the Protagonistët",
            'type_img' => "ENFJ.png",
            'featured_Image' => "ENFJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESTJ",
            'name' => "zbatuesi",
            'description' => "This is a short description of the zbatuesi",
            'type_img' => "ESTJ.png",
            'featured_Image' => "ESTJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESFJ",
            'name' => "Ofruesi",
            'description' => "This is a short description of the Ofruesi",
            'type_img' => "ESFJ.png",
            'featured_Image' => "ESFJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENTP",
            'name' => "debatuesi",
            'description' => "This is a short description of the debatuesi",
            'type_img' => "ENTP.png",
            'featured_Image' => "ENTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENFP",
            'name' => "Përkrahësi",
            'description' => "This is a short description of the Përkrahësi",
            'type_img' => "ENFP.png",
            'featured_Image' => "ENFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESTP",
            'name' => "sipërmarrësi",
            'description' => "This is a short description of the sipërmarrësi",
            'type_img' => "ESTP.png",
            'featured_Image' => "ESTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESFP",
            'name' => "ARGËTUESI",
            'description' => "This is a short description of the ARGËTUESI",
            'type_img' => "ESFP.png",
            'featured_Image' => "ESFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
