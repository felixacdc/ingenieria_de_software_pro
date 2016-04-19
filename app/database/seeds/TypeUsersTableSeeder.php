<?php

use Illuminate\Database\Seeder;

use App\Tipo_usuario;

class TypeUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Tipo_usuario;

        $type->tipo = 'Administrador';
        $type->save();

        $type = new Tipo_usuario;

        $type->tipo = 'General';
        $type->save();
    }
}
