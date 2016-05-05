<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(TypeServicesHealthTableSeeder::class);
        $this->call(CentersTableSeeder::class);
        $this->call(TypeUsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PacienteTableSeeder::class);


        Model::reguard();
    }
}
