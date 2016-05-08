<?php

use Illuminate\Database\Seeder;

class ConclusionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Conclusion::class,50)->create();

    }
}
