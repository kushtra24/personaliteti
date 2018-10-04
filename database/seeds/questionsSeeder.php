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
        DB::table('questions')->insert([
            'question' => "A ju shkakton lodhje mendore apo ju mbush me energji qëndrimi në mes të shumë njerëzve",
            'purpose' => "IntroExtro",
            'pajtohem' => "Lodhje mendore",
            'spajtohem' => "Energji",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A humbeni shpesh në mendime apo qëndroni gjithmonë në realitet?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Mendime",
            'spajtohem' => "Realitet",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse miku juaj është i mërzitur ju më parë i jepni mbështetje emocionale apo ofroni mënyra për zgjidhje të problemit?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Mbështetje emocionale",
            'spajtohem' => "Zgjidhje konkrete",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Provoni t’u pergjigjigjeni emailave sa më parë dhe nuk mund të duroni një inbox të paorganizuar",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse bëjeni ushtrime fizike ju pelqen të jeni në shtepi vetëm",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh ua ngatërroni vendin gjërave",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nësë veprimet e mia ndikojnë te tjerët mua më mundon mentalisht",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Për ju është më e rëndësishme të jeni i organizuar sesa të improvizoni",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "E keni të vështirë të prezantoheni te të tjerët që nuk i njifni",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh ju duket sikur duhet të arsyetoni veten tek të tjerët",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Për ju është më e rëndësishme të mos mërzitet askush sesa të fitoni një debat",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shtëpia dhe vendi juaj i punës janë të pastërta dhe në gjendje të rregullt",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nuk e keni zakon të filloni i pari bisedën",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ju e konsideroni veten më shumë kreativ sesa praktik",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ju besoni e vërteta është më e rëndësishme sesa të jesh i sjellshëm",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Planet e juaja të udhëtimit janë të menduara mirë",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Zakonisht jeni i motivuar dhe me shumë energji.",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ju intereson pse është marrë një vëndim se sa cfarë vëndimi është marr",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Disponimi juaj ndryshon shpesh",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Është e rëndesishme të kemë një list se cfarë dua të bëjë, jo vetëm të fillojë të bëjë",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ju pengon të jeni në qendër të vëmendjes",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Për ta kryër një punë dëshironi të dini Kuptimin e punës para se të filloni",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

         DB::table('questions')->insert([
            'question' => "Në një diskutim, ndjenjat e njerëzve duhet të jenë më të rëndësishme sesa e vërteta",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Doni të ktheni përgjigje menjëherë",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Një libër interesant apo një video loje është shpesh më i mirë sesa një ngjarje shoqërore",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh humbeni në imagjinatë",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Brengoseni se si veprimet e tua ndikojnë tek të tjerët",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse dikush nuk i përgjigjet emailit tuaj menjëherë, ju filloni të brengoseni nëse keni thënë diçka të gabuar",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh thelloheni në një botë të juajën në mendjë",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh e gjeni veten të humbur në mendime kur dilni për shëtitje në natyrë",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Si prind, më shumë do doje që fëmija juaj të bëhet i mirë sesa i mençur",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "E kijoni një përshtypje pastajë shiheni se a e këni mirë apo gabim",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ju merr shumë kohë që të bëheni pjesë e aktiviteteve shoqërore në vendin e ri të punës",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh harxhoni kohë duke shtjelluar ide te pavërteta dhe jopraktike, por interesante",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Emocionet ju kontrollojnë më shumë sesa që ju i kontrolloni ato",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Jeni më shumë një planifikues i kujdesshëm sesa një improvizues i natyrshëm",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nuk ju pëlqen të shkoni në ngjarje shoqërore ku duhet të visheni në menyre të jashtzakonshme",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Shpesh meditoni për arsyet e ekzistencës njerëzore",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse do kishit një biznes, ju do e kishit të vështirë të largoni nga puna punëtorët besnikë por dembel",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Më parë do të harxhonit kohë për një plan të detajuar sesa të imporvizonit",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Jeni një person pak a shumë i mbyllur dhe i heshtur",
            'purpose' => "IntroExtro",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ju mendoni se pikëpamjet e të gjithëve duhen respektuar pavarsisht a janë të bazuara në fakte apo jo",
            'purpose' => "intuitionSensing",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Zemra është shpesh më e rëndësishme se logjika kur është fjala për vendime të rëndësishme",
            'purpose' => "feelingThinking",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Të keni një listë është më e rëndësishme se të mbani opsionet e hapura",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "djathtas",
            'spajtohem' => "majtas",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
