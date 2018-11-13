<?php

use Illuminate\Database\Seeder;
use Futbol\Rol;
use Futbol\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_user =  Rol::where('name','user')->first();
        $rol_admin =  Rol::where('name','admin')->first();

        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->rols()->attach($rol_user);

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->rols()->attach($rol_admin);
    }
}
