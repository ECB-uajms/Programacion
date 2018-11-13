<?php

use Illuminate\Database\Seeder;
use Futbol\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->name = "admin";
        $rol->description = "Administrador";
        $rol->save();

        $rol = new Rol();
        $rol->name = "user";
        $rol->description = "User";
        $rol->save();
    }
}
