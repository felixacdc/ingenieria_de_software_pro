<?php

use Illuminate\Database\Seeder;

use App\Centro;

class CentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $center = new Centro;

        DB::table('centros')->delete();
        DB::table('centros')->insert([
            ['centro'=>'Ninguno','tipo_centro_id'=>1,'direccion'=>'Ninguna','telefono'=>'00000000', 'distrito'=>true],
            ['centro'=>'Mazatenango','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454', 'distrito'=>true]

        ]);
        DB::table('centros')->insert(array(
             array('centro'=>'San Francisco','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Lorenzo','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Gabriel','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Jose El Idolo','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Gabriel','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Santo Tomas La Union','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Samayac','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Pablo Jocopilas','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Rio Bravo','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Pueblo Nuevo','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Zunilito','tipo_centro_id'=>3,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Santo Domingo','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Santa Barbara','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Chicacao','tipo_centro_id'=>3,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Patulul','tipo_centro_id'=>3,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Jose La Maquina','tipo_centro_id'=>3,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'Cuyotenango','tipo_centro_id'=>3,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Antonio','tipo_centro_id'=>3,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Bernandino','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
             array('centro'=>'San Miguel Panon','tipo_centro_id'=>4,'direccion'=>'Direccion Fisica','telefono'=>'54545454'),
          ));
    }
}
