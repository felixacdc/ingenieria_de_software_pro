<?php

use Illuminate\Database\Seeder;
use App\type_services_health
class TypeServiceHealth extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $types =[
          [
              'type_service'  => 'Tipo A',
          ],
          [
              'type_service'  => 'Tipo B',
          ]
      ];


    foreach ($types as $type){
        type_services_health::create($type);
    }
}
