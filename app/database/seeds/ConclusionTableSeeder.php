<?php

use Illuminate\Database\Seeder;

class ConclusionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //factory(App\Conclusion::class,50)->create();


      for ($i=1; $i <=50 ; $i++) {
        DB::table('conclusion')->insert([
          'evaluacion_medica'  => rand(1,0),
          'referido_a'         => 'Lorem ipsum',
          'fecha'              => '2016/05/' . rand(1,30),
          'nombre'             => 'Jose rivera',
          'paciente_id'        => $i,
      ]);
      }

    }
}
