<?php

use Illuminate\Database\Seeder;

use App\type_services_health;

class TypeServicesHealthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new type_services_health;
        DB::table('type_services_health')->delete();
        DB::table('type_services_health')->insert(array(
             array('type_service'=>'Tipo A'),
             array('type_service'=>'Tipo B')
          ));
       }

}
