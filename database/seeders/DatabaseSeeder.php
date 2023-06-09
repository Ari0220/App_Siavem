<?php

use Database\Seeders\UsersTableSeeder;
use Database\Seeders\DepartamentosTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

  public function run()
  {
      
    $this->call([
      // AreaSeeder::class,
      DepartamentosTableSeeder::class,
      RolesTableSeeder::class,
      UsersTableSeeder::class,

    ]);
  }

  public function truncateTables(array $tables){
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
      foreach($tables as $table)
      {
          DB::table($table)->truncate();
      }
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
      DB::statement('SET FOREIGN_KEY_CHECKS = 2;');
  }
}