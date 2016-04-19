<?php

use Illuminate\Database\Seeder;

use App\Tipo_centro;

class TypeServicesHealthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Tipo_centro;
        DB::table('tipo_centro')->delete();
        DB::table('tipo_centro')->insert(array(
             array('tipo'=>'Tipo A'),
             array('tipo'=>'Tipo B'),
             array('tipo'=>'CAP'),
             array('tipo'=>'CENAPA'),
          ));
       }

}
