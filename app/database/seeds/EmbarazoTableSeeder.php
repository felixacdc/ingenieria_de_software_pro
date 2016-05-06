<?php

use Illuminate\Database\Seeder;

class EmbarazoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\embarazo_actual::class,50)->create();
    }
}
