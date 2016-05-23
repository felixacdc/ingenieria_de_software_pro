<?php

use Illuminate\Database\Seeder;

class ObstetricosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\antecedentes_obstetricos::class, 50)->create();
        for ($i=1; $i <=60 ; $i++) {
          DB::table('antecedentes_obstetricos')->insert([
            'dato1'         => rand(0,1),
            'dato2'         => rand(0,1),
            'dato3'         => rand(0,1),
            'dato4'         => rand(0,1),
            'dato5'         => rand(0,1),
            'dato6'         => rand(0,1),
            'dato7'         => rand(0,1),
            'pacientes_id'  => $i,
        ]);
        }
    }
}
