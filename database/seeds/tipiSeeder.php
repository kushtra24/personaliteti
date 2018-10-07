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
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the KËSHILLUESI",
	        'type_img' => "images/INTJ.png",
	        'feat_img' => "images/feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFJ",
	        'name' => "KËSHILLUESI",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
	        'shortDescription' => "This is a short description of the KËSHILLUESI",
	        'type_img' => "images/INFJ.png",
	        'feat_img' => "images/feat.png",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISTJ",
            'name' => "INSPEKTORI",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the INSPEKTORI",
            'type_img' => "images/ISTJ.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISFJ",
            'name' => "Mbrojtësi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the mbrojtësi",
            'type_img' => "images/ISFJ.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INTP",
            'name' => "Mendimtari",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the FILOZOFЁT",
            'type_img' => "images/INTP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "INFP",
            'name' => "NDËRMJETËSUESI",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the NDËRMJETËSUESI",
            'type_img' => "images/INFP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISTP",
            'name' => "I SHKATHËTI",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the I SHKATHËTI",
            'type_img' => "images/ISTP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ISFP",
            'name' => "Aventuristi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the aventurierët",
            'type_img' => "images/ISFP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENTJ",
            'name' => "KOMANDANTI",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the KOMANDANTI",
            'type_img' => "images/ENTJ.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([		
            'type' => "ENFJ",
            'name' => "Protagonisti",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "Çdo gjë që bën tani paraqitet jashtë dhe ka ndikim te të gjithë. Qëndrimi yt mund të ndriçoj zemra ose të shkaktoj shqetësim. Fryma jote mund të rrezatoj dashuri ose të mbuloj dhomën me depresion. Shikimi yt mund të shkaktoj gëzim. Fjalët e tua mund të inspirojnë liri. Çdo akt i yti mund të hap zemra dhe mendje	",
            'type_img' => "	images/ENFJ.png	",
            'feat_img' => "	images/feat-ESTP.png	",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),		
           ]);		
           

        DB::table('tipis')->insert([
            'type' => "ESTJ",
            'name' => "zbatuesi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the zbatuesi",
            'type_img' => "images/ESTJ.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESFJ",
            'name' => "Ofruesi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the Ofruesi",
            'type_img' => "images/ESFJ.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENTP",
            'name' => "debatuesi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the debatuesi",
            'type_img' => "images/ENTP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ENFP",
            'name' => "Përkrahësi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the Përkrahësi",
            'type_img' => "images/ENFP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([
            'type' => "ESTP",
            'name' => "sipërmarrësi",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "This is a short description of the sipërmarrësi",
            'type_img' => "images/ESTP.png",
            'feat_img' => "images/feat.png",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('tipis')->insert([		
            'type' => "ESFP",
            'name' => "ARGËTUESI",
            'hyrje' => "",
            'forcatDobesit' => "",
            'lidhjet' => "",
            'miqesite' => "",
            'siPrinder' => "",
            'profesioni' => "",
            'vendiPunes' => "",
            'shtese' => "",
            'shortDescription' => "	Jam egoiste, e paduruar dhe pak e pasigurt. Bëj gabime, dal jashtë kontrollit dhe ndonjëherë është vështirë të merresh me mua. Mirëpo, nëse nuk mund të më durosh në më të keqen time, sigurisht që nuk e meriton më të mirën. 	",
            'type_img' => "images/ESFP.png",
            'feat_img' => "	images/feat-ESTP.png	",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),		
            ]);		
            

    }
}
