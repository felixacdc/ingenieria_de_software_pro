<?php

use Illuminate\Database\Seeder;

class HistorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //factory(App\Historia_clinica_general::class, 50)->create();
      for ($i=1; $i <=50 ; $i++) {
        DB::table('historia_clinica_general')->insert([
          'dato1'         => rand(0,1),
          'dato2'         => rand(0,1),
          'dato3'         => rand(0,1),
          'dato4'         => rand(0,1),
          'dato5'         => rand(0,1),
          'dato6'         => rand(0,1),
          'dato7'         => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.,',
          'paciente_id'  => $i,
      ]);
      }
    }
}
