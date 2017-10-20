<?php

use Illuminate\Database\Seeder;

class TestCounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $testCounter = new \App\testCounter();
        DB::table('test_counters')->insert([
            'test_counter' => "0",
        ]);
    }
}
