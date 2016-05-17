<?php

use Illuminate\Database\Seeder;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Paciente::class, 50)->create();

        DB::table('pacientes')
            ->where('id','>=' ,1)
            ->where('id','<=' ,10)
            ->update(['user_id' => 1]);


        DB::table('pacientes')
            ->where('id','>=' ,1)
            ->where('id','<=' ,10)
            ->update(['centro_id' => 1]);
////////////////////////////////////////////////////////////////////
        DB::table('pacientes')
                ->where('id','>=' ,11)
                ->where('id','<=' ,20)
                ->update(['user_id' => 2]);

        DB::table('pacientes')
                ->where('id','>=' ,11)
                ->where('id','<=' ,20)
                ->update(['centro_id' => 2]);
/////////////////////////////////////////////////////////////////////////
        DB::table('pacientes')
                ->where('id','>=' ,21)
                ->where('id','<=' ,30)
                ->update(['user_id' => 3]);


        DB::table('pacientes')
                ->where('id','>=' ,21)
                ->where('id','<=' ,30)
                ->update(['centro_id' => 7]);



////////////////////////////////////////////////////////////////////////////////////                /

        DB::table('pacientes')
                ->where('id','>=' ,31)
                ->where('id','<=' ,40)
                ->update(['user_id' => 4]);

        DB::table('pacientes')
                ->where('id','>=' ,31)
                ->where('id','<=' ,40)
                ->update(['centro_id' => 8]);
/////////////////////////////////////////////////////////////////////////////////////////

        DB::table('pacientes')
                ->where('id','>=' ,41)
                ->where('id','<=' ,50)
                ->update(['user_id' => 5]);

          DB::table('pacientes')
                  ->where('id','>=' ,41)
                  ->where('id','<=' ,50)
                  ->update(['centro_id' => 9]);
    }
}
