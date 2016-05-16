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
      for ($i=1; $i <=50 ; $i++) {
        DB::table('embarazo_actual')->insert([
          'dato1'          => rand(0,1),
          'dato2'          => true,
          'dato3'          => true,
          'dato4'          => false,
          'dato5'          => true,
          'dato6'          => false,
          'dato7'          => true,
          'dato8'          => true,
          'dato9'          => true,
          'dato10'         => true,
          'dato11'         => true,
          'dato12'         => true,
          'pacientes_id'   => $i,
      ]);
      }
    }
}
