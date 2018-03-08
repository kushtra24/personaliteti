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
	        'shortDescription' => "This is a short description of the Arkitekti",
	        'type_img' => "images/intj.png",
	        'featured_Image' => "intj-feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFJ",
	        'name' => "KËSHILLUESI",
            'description' => "This is a short description of the KËSHILLUESI",
	        'shortDescription' => "This is a short description of the KËSHILLUESI",
	        'type_img' => "images/INFJ.png",
	        'featured_Image' => "INFJ-feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISTJ",
            'name' => "INSPEKTORI",
            'description' => "This is a short description of the INSPEKTORI",
            'shortDescription' => "This is a short description of the INSPEKTORI",
            'type_img' => "images/ISTJ.png",
            'featured_Image' => "ISTJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISFJ",
            'name' => "mbrojtësi",
            'description' => "This is a short description of the mbrojtësi",
            'shortDescription' => "This is a short description of the mbrojtësi",
            'type_img' => "images/ISFJ.png",
            'featured_Image' => "ISFJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INTP",
            'name' => "FILOZOFЁT",
            'description' => "This is a short description of the FILOZOFЁT",
            'shortDescription' => "This is a short description of the FILOZOFЁT",
            'type_img' => "images/INTP.png",
            'featured_Image' => "INTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFP",
            'name' => "NDËRMJETËSUESI",
            'description' => "This is a short description of the NDËRMJETËSUESI",
            'shortDescription' => "This is a short description of the NDËRMJETËSUESI",
            'type_img' => "images/INFP.png",
            'featured_Image' => "INFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISTP",
            'name' => "I SHKATHËTI",
            'description' => "This is a short description of the I SHKATHËTI",
            'shortDescription' => "This is a short description of the I SHKATHËTI",
            'type_img' => "images/ISTP.png",
            'featured_Image' => "ISTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISFP",
            'name' => "aventurierët",
            'description' => "This is a short description of the aventurierët",
            'shortDescription' => "This is a short description of the aventurierët",
            'type_img' => "images/ISFP.png",
            'featured_Image' => "ISFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENTJ",
            'name' => "KOMANDANTI",
            'description' => "This is a short description of the KOMANDANTI",
            'shortDescription' => "This is a short description of the KOMANDANTI",
            'type_img' => "images/ENTJ.png",
            'featured_Image' => "ENTJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENFJ",
            'name' => "Protagonistët",
            'description' => "This is a short description of the Protagonistët",
            'shortDescription' => "This is a short description of the Protagonistët",
            'type_img' => "images/ENFJ.png",
            'featured_Image' => "ENFJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESTJ",
            'name' => "zbatuesi",
            'description' => "This is a short description of the zbatuesi",
            'shortDescription' => "This is a short description of the zbatuesi",
            'type_img' => "images/ESTJ.png",
            'featured_Image' => "ESTJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESFJ",
            'name' => "Ofruesi",
            'description' => "This is a short description of the Ofruesi",
            'shortDescription' => "This is a short description of the Ofruesi",
            'type_img' => "images/ESFJ.png",
            'featured_Image' => "ESFJ-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENTP",
            'name' => "debatuesi",
            'description' => "This is a short description of the debatuesi",
            'shortDescription' => "This is a short description of the debatuesi",
            'type_img' => "images/ENTP.png",
            'featured_Image' => "ENTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENFP",
            'name' => "Përkrahësi",
            'description' => "This is a short description of the Përkrahësi",
            'shortDescription' => "This is a short description of the Përkrahësi",
            'type_img' => "images/ENFP.png",
            'featured_Image' => "ENFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESTP",
            'name' => "sipërmarrësi",
            'description' => "This is a short description of the sipërmarrësi",
            'shortDescription' => "This is a short description of the sipërmarrësi",
            'type_img' => "images/ESTP.png",
            'featured_Image' => "ESTP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESFP",
            'name' => "ARGËTUESI",
            'description' => "This is a short description of the ARGËTUESI",
            'shortDescription' => "This is a short description of the ARGËTUESI",
            'type_img' => "images/ESFP.png",
            'featured_Image' => "ESFP-feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    }
}
