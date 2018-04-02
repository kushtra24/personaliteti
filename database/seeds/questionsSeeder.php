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
            'question' => "Të qendroni në mesin e shumë njerëzve ju lodhë mentalisht",
	        'purpose' => "IntroExtro",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh herë humbeni në mendime sa që harroni se ku ndodheni",
	        'purpose' => "intuitionSensing",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nëse miku juaj është i mërzitur për diçka ju më parë do t’i jepnit mbështetje emocionale sesa t’i ofroni mënyra për zgjedhjen e problemit",
	        'purpose' => "feelingThinking",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Provoni t’u pergjigjigjeni emailave sa më parë dhe nuk mund të duroni një inbox të paorganizuar",
	        'purpose' => "jundgingPerciving",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nëse bëjeni ushtrime fizike ju pelqen të jeni në shtepi vetëm",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh ua ngatërroni vendin gjërave",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nësë duhët të bëhet diçka e bëjë edhe nëse kjo do të ndikojë te të tjeret",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Për ju është më e rëndësishme të jeni i organizuar sesa të përshtateni me lehtësi",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "E keni të vështirë të prezantoheni te të tjerët që nuk i njifni",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh ju duket sikur duhet të arsyetoni veten tek të tjerët",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Për ju është më e rëndësishme të mos mërzitet askush sesa të fitoni një debat",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shtëpia dhe vendi juaj i punës janë të pastërta dhe në gjendje të rregullt",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nuk e keni zakon të filloni i pari bisedën",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Ju e konsideroni veten më shumë kreativ sesa praktik",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Ju besoni e vërteta është më e rëndësishme sesa të jesh i sjellshëm",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Planet e juaja të udhëtimit janë të menduara mirë",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Zakonisht jeni i motivuar dhe me shumë energji.",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Ju intereson pse është marrë një vëndim se sa cfarë vëndimi është marr",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Disponimi juaj nuk ndryshon shpejt",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Është e rëndesishme të kemë një list se cfarë dua të bëjë, jo vetëm të fillojë të bëjë",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nuk ju pengon të jeni në qendër të vëmendjes",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nuk i keni zili të tjerët",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

         DB::table('Questions')->insert([
            'question' => "Në një diskutim, e vërteta duhet të jetë më e rëndësishme sesa ndjenjat e njerëzve",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Doni të ktheni përgjigje menjëherë",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Një libër interesant apo një video loje është shpesh më i mirë sesa një ngjarje shoqërore",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh humbeni në imagjinatë",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Brengoseni se si veprimet e tua ndikojnë tek të tjerët",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nëse dikush nuk i përgjigjet emailit tuaj menjëherë, ju filloni të brengoseni nëse keni thënë diçka të gabuar",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Ëndrrat e juaja janë të përqendruara në botën e vërtetë dhe ngjarjet e saj",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh e gjeni veten të humbur në mendime kur dilni për shëtitje në natyrë",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Si prind, më shumë do doje që fëmija juaj të bëhet i mirë sesa i mençur",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "E kijoni një përshtypje pastajë shiheni se a e këni mirë apo gabim",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Ju merr shumë kohë që të bëheni pjesë e aktiviteteve shoqërore në vendin e ri të punës",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh harxhoni kohë duke shtjelluar ide te pavërteta dhe jopraktike, por interesante",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Emocionet ju kontrollojnë më shumë sesa që ju i kontrolloni ato",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Jeni më shumë një planifikues i kujdesshëm sesa një improvizues i natyrshëm",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nuk ju pëlqen të shkoni në ngjarje shoqërore ku duhet të visheni në menyre të jashtzakonshme",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Shpesh meditoni për arsyet e ekzistencës njerëzore",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Nëse do kishit një biznes, ju do e kishit të vështirë të largoni nga puna punëtorët besnikë por dembel",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Më parë do të harxhonit kohë për një plan të detajuar sesa të imporvizonit",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Jeni një person pak a shumë i mbyllur dhe i heshtur",
            'purpose' => "IntroExtro",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Ju mendoni se pikëpamjet e të gjithëve duhen respektuar pavarsisht a janë të bazuara në fakte apo jo",
            'purpose' => "intuitionSensing",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Zemra është shpesh më e rëndësishme se logjika kur është fjala për vendime të rëndësishme",
            'purpose' => "feelingThinking",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Questions')->insert([
            'question' => "Të keni një listë është më e rëndësishme se të mbani opsionet e hapura",
            'purpose' => "jundgingPerciving",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
