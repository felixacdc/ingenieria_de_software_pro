<?php

use Illuminate\Database\Seeder;

class EmbarazoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i <=60 ; $i++) {
        DB::table('embarazo_actual')->insert([
          'dato1'          => rand(0,1),
          'dato2'          => rand(0,1),
          'dato3'          => rand(0,1),
          'dato4'          => rand(0,1),
          'dato5'          => rand(0,1),
          'dato6'          => rand(0,1),
          'dato7'          => rand(0,1),
          'dato8'          => rand(0,1),
          'dato9'          => rand(0,1),
          'dato10'         => rand(0,1),
          'dato11'         => rand(0,1),
          'dato12'         => rand(0,1),
          'pacientes_id'   => $i,
      ]);
      }
    }
}
