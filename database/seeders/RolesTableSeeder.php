<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->where('email', 'da598298@gmail.com')->delete();

        DB::table('roles')->insert([
            'NombreRol' => 'superAdmin',
        ]);
        DB::table('roles')->insert([
            'NombreRol' => 'Administrador',
        ]);

        DB::table('roles')->insert([
            'NombreRol' => 'Usuario',
        ]);

    }
}