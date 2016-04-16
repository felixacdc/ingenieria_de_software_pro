<?php

use Illuminate\Database\Seeder;

use App\Center;

class CentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $center = new Center;

        $center->center = "First Center";
        $center->type_service_health_id = 1;

        $center->save();
    }
}
