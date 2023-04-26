<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->where('email', 'da598298@gmail.com')->delete();

        DB::table('departamentos')->insert([
            'nombreDepa' => 'Administrativo', 
        ]);

        DB::table('departamentos')->insert([
            'nombreDepa' => 'RRHH', 
        ]);

    }
}