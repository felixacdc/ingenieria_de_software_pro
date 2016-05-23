<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->user = 'Admin';
        $user->password ='12345';
        $user->name = 'Yo';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com1';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 1;
        $user->tipo_usuario_id = 1;
        $user->save();

        $user = new User;
        $user->user = 'AdminDirstrito';
        $user->password ='12345';
        $user->name = 'Padre';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com2';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 2;
        $user->tipo_usuario_id = 2;
        $user->save();

        $user = new User;
        $user->user = 'Pepe';
        $user->password ='12345';
        $user->name = 'Padre';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com3';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 7;
        $user->tipo_usuario_id = 3;
        $user->save();

        $user = new User;
        $user->user = 'usersamayac';
        $user->password ='12345';
        $user->name = 'Padre';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com4';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 8;
        $user->tipo_usuario_id = 3;
        $user->save();


        $user = new User;
        $user->user = 'userjocopilas';
        $user->password ='12345';
        $user->name = 'Padreasd';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com5';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 9;
        $user->tipo_usuario_id = 3;
        $user->save();

        $user = new User;
        $user->user = 'userbarabara';
        $user->password ='12345';
        $user->name = 'Padreasd';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com6';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 14;
        $user->tipo_usuario_id = 3;
        $user->save();

        $user = new User;
        $user->user = 'userpanan';
        $user->password ='12345';
        $user->name = 'Padreasd';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com7';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 24;
        $user->tipo_usuario_id = 3;
        $user->save();

        $user = new User;
        $user->user = 'userantonio';
        $user->password ='12345';
        $user->name = 'Padreasd';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com8';
        $user->phone = '58564759';
        $user->state=true;
        $user->centro_id = 22;
        $user->tipo_usuario_id = 2;
        $user->save();
    }
}
