<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(tipiSeeder::class);
        $this->call(questionsSeeder::class);
        $this->call(postSeeder::class);
        $this->call(pageSeeder::class);
    }
}
