<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        $role_user = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->first_name = "Visitori";
        $user->last_name = "Visitor";
        $user->age = "2018-05-02";
        $user->email = "visitor@example.com";
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->first_name = "Filan";
        $admin->last_name = "Admin";
        $admin->age = "2018-05-02";
        $admin->email = "admin@example.com";
        $admin->password = bcrypt("admin");
        $admin->save();
        $admin->roles()->attach($role_admin);


        $author = new User();
        $author->first_name = "Author";
        $author->last_name = "Author";
        $author->age = "2018-05-02";
        $author->email = "author@example.com";
        $author->password = bcrypt("author");
        $author->save();
        $author->roles()->attach($role_author);
    }

}
