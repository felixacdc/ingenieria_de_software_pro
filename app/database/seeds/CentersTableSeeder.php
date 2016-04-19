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

        $center->centro = "First Center";
        $center->tipo_centro_id = 1;

        $center->save();
    }
}
