<?php

use Illuminate\Database\Seeder;

class tipet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new tipet();
        $type->type = 'INTJ';
        $type->name = 'Arcitect';
        $type->description = 'This is a short description of the Arcitect';
        $type->type_img = 'intj.png';
        $type->featured_Image = 'intj-feat.png';
        $role_user->save();
    }
}
