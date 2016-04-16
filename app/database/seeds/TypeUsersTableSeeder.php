<?php

use Illuminate\Database\Seeder;

use App\type_user;

class TypeUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new type_user;

        $type->type_user = 'Administrador';
        $type->save();

        $type = new type_user;

        $type->type_user = 'General';
        $type->save();
    }
}
