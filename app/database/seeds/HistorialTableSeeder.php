<?php

use Illuminate\Database\Seeder;

class HistorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Historia_clinica_general::class, 50)->create();
    }
}
