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

        $type->type_service = 'OneCenter';
        $type->save();
    }
}
