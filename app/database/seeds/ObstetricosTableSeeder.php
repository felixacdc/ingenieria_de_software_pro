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
        factory(App\antecedentes_obstetricos::class, 50)->create();
    }
}
