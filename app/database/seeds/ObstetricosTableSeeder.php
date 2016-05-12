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
        for ($i=1; $i <=50 ; $i++) {
          DB::table('antecedentes_obstetricos')->insert([
            'dato1'         => true,
            'dato2'         => true,
            'dato3'         => true,
            'dato4'         => true,
            'dato5'         => true,
            'dato6'         => false,
            'dato7'         => true,
            'pacientes_id'  => $i,
        ]);
        }
    }
}
