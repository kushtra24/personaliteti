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
            'question' => "A provoni tu pergjigjigjeni emailave sa më parë apo gjeni një kohë më të përshtatshme për tu përgjigjur?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Sa më parë",
            'spajtohem' => "Kohë të përshtatshme",
	        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Ku qëndroni në një dhomë të mbushur me njerëz, në qoshe apo në qendër?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Qoshe",
            'spajtohem' => "Qendër",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ua ngatërroni shpesh vendin gjërave apo mbani mend mirë ku qëndrojnë?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Ngatërroj vendin",
            'spajtohem' => "Mbaj mend",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse veprimet tuaja ndikojnë te personat e tjerë, a ju mundon juve kjo gjë mentalisht apo jeni relativisht të qetë?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Mundim mental",
            'spajtohem' => "Relativisht i qetë",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A është më e rëndësishme të jeni person i organizuar apo të improvizoni?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Organizim",
            'spajtohem' => "Improvim",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A e keni të vështirë të prezantoheni te personat që nuk i njihni apo mund të prezantoheni lehtësisht?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Të vështirë",
            'spajtohem' => "Të lehtë",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A jeni të interesuar në gjëra të pazakonta dhe me shumë kuptime, psh. art dhe filma, apo jeni i orientuar më shumë në gjëra konkrete psh. sport apo ekonomi?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Gjëra të pazakonta",
            'spajtohem' => "Konkrete",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Për ju a është më e rëndësishme të mos mërzitet askush apo të fitoni një debat?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Të mos merzitet askush",
            'spajtohem' => "Fitoni debatin",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A është shtëpia juaj në gjendje të rregullt apo mbani gjërat te paorganizuara?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Gjendje te rregullt",
            'spajtohem' => "Pa organizuar",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A jeni i pari që filloni bisedë me të tjerët apo prisni që të tjerët të afrohen te ju?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Pres që të më afrohen",
            'spajtohem' => "Filloj unë",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A e konsideroni veten më shumë kreativ apo praktik?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Kreativ",
            'spajtohem' => "Praktik",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Cila është më e rëndësishme, e vërteta apo te qenit i sjellshëm?",
            'purpose' => "feelingThinking",
            'pajtohem' => "I sjellshëm",
            'spajtohem' => "E vërteta",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A janë planet e juaja të udhëtimit të menduara mirë apo vendosni aty per aty?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Planifikoj",
            'spajtohem' => "Improvizoj",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A jeni tip energjik apo më i qetë?",
            'purpose' => "IntroExtro",
            'pajtohem' => "I qetë",
            'spajtohem' => "Energjik",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ju intereson më shume pse është marrë një vendim apo cfarë vendimi është marr?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "pse",
            'spajtohem' => "çfarë",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ndryshon disponimi juaj shpesh apo është stabil?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Ndryshon",
            'spajtohem' => "Stabil",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A është e rëndesishme të keni një list me gjëra që dëshironi të bëni apo te filloni atë duke mos e menduar gjithçka?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Duke mos menduar gjithçka",
            'spajtohem' => "Listë e menduar",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ju pëlqen apo ju pengon të jeni në qendër të vëmendjes? ",
            'purpose' => "IntroExtro",
            'pajtohem' => "Më pengon",
            'spajtohem' => "Më pëlqen",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Para se të filloni një punë, ju a mundoheni të gjeni kuptimin e saj paraprak apo versuleni drejt saj?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Gjej kuptimin",
            'spajtohem' => "Vërsulem",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

         DB::table('questions')->insert([
            'question' => "Në një diskutim, a është më e rëndsishme e vërteta apo ndjenjat e njerëzve?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Ndjenjat",
            'spajtohem' => "E vërteta",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ju pëlqen me shume një libër ose video lojë apo një ngjarje shoqërore?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Një libër apo videolojë",
            'spajtohem' => "Ngjarje shoqërore",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse dikush nuk i përgjigjet emailit tuaj menjëherë, a filloni të brengoseni nëse keni thënë diçka të gabuar apo prisni përgjigjen duke mos u brengosur fare?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Brengosem",
            'spajtohem' => "Nuk brengosem",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A qëndroni gjithmonë i vëmendshem apo thelloheni në mendime?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Thellohem në mendime",
            'spajtohem' => "Qëndroj i/e vëmendshëm/shme",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Gjatë një shëtitjeje në natyrë, a e shijoni vendin apo thelloheni në mendime?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Thellohem në mendime",
            'spajtohem' => "Shijoj natyrën",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Si prind, më shumë do të donit që fëmija juaj të bëhet i sjellshëm apo i mençur",
            'purpose' => "feelingThinking",
            'pajtohem' => "I sjellshëm",
            'spajtohem' => "i mençur",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A parapëlqeni ti keni gjërat të vendosura apo ti keni opsionet e hapura?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Të vendosur",
            'spajtohem' => "E hapura",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ju merr shumë kohë që të bëheni pjesë e aktiviteteve shoqërore në vendin e ri të punës apo ambientoheni shpejt?",
            'purpose' => "IntroExtro",
            'pajtohem' => "“Merr kohë”",
            'spajtohem' => "“Ambientohem”",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Mendimet tuaja negative ju kontrollojnë më shumë se sa që i kontrolloni ju ato?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Më kontrollojnë",
            'spajtohem' => "Unë i kontrolloj ato",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A jeni më shumë një tip improvizues apo një planifikues i kujdesshëm?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Planifikues",
            'spajtohem' => "Improvizues",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A keni rreth shumë të gjerë të shoqërise apo shoqëroheni me pak persona?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Pak persona",
            'spajtohem' => "Shumë shoqëri",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A meditoni shpesh për arsyet e ekzistencës njerëzore apo nuk ju intereson kjo qështje?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Më intereson “meditoj”",
            'spajtohem' => "Nuk më intereson",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Nëse do kishit një biznes, a do e kishit të vështirë të largoni nga puna punëtorët besnikë por dembel apo do ti largonit ata pa problem? ",
            'purpose' => "feelingThinking",
            'pajtohem' => "E kam të veshtirë ti largoj",
            'spajtohem' => "I largoj",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A jeni një person i mbyllur dhe i heshtur apo i hapur dhe i zhurmshëm?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "I mbyllur dhe i heshtur",
            'spajtohem' => "I hapur dhe zhurmshëm",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A veproni me zemër apo mendje kur është fjala për vendime të rëndësishme? ",
            'purpose' => "IntroExtro",
            'pajtohem' => "Zemër",
            'spajtohem' => "Mendje",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A i mbani opsionet e hapura apo keni nje listë te planifikuar?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Listë të planifikuar",
            'spajtohem' => "Opsionet e hapura",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A mund te qëndroni i qetë dhe i përqendruar edhe nën presion?",
            'purpose' => "feelingThinking",
            'pajtohem' => "jo",
            'spajtohem' => "po",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ndiheni më superior se të tjerët?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "po",
            'spajtohem' => "jo",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A e keni te lehtë apo te vështirë të kuptoni ndjenjat e të tjerëve?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Të lehtë",
            'spajtohem' => "Të vështire",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A mendoni se pikëpamjet e të gjithëve duhen respektuar pavarsisht a janë të bazuara në fakte apo jo?",
            'purpose' => "feelingThinking",
            'pajtohem' => "po",
            'spajtohem' => "jo",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A shkoni gjithmonë me kohë në takime apo vonoheni?",
            'purpose' => "jundgingPerciving",
            'pajtohem' => "Me kohë",
            'spajtohem' => "vonohem nganjëher",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A besoni se bota është e ndërtuar nga mëshira apo nga logjika?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Mëshira ",
            'spajtohem' => "Logjika",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A mendoni shpesh per njerëzimin dhe fatin e tij apo preferoni të mos mendoni per këtë gjë?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Mendoj",
            'spajtohem' => "Nuk mendoj",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A mendoni shpesh për shkaktarin e një ngjarje apo jo?",
            'purpose' => "intuitionSensing",
            'pajtohem' => "Mendoj",
            'spajtohem' => "Nuk mendoj",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A i besoni më shumë ndjenjave apo logjikës?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Ndjenjave",
            'spajtohem' => "Logjikës",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "Kohën e lirë a e kaloni me një grup njerëzish apo vetëm?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Vetëm",
            'spajtohem' => "Grup njerëzish",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A e keni te lehtë apo të vështire ti shprehni ndjenjat?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Të lehtë",
            'spajtohem' => "Të vështirë",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A e vlerësoni më shumë drejtësinë apo mëshirën?",
            'purpose' => "feelingThinking",
            'pajtohem' => "Drejtësinë",
            'spajtohem' => "Mëshirën",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('questions')->insert([
            'question' => "A ndjeheni të qetë apo në siklet nëse ju duhet të flisni me shumë njerëz?",
            'purpose' => "IntroExtro",
            'pajtohem' => "Të qetë",
            'spajtohem' => "Në siklet",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
