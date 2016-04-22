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
        $user->password = bcrypt('12345');
        $user->name = 'Yo';
        $user->address = 'Suchi';
        $user->email = 'my@muy.com';
        $user->phone = '58564759';
        $user->centro_id = 1;
        $user->tipo_usuario_id = 1;
        $user->save();
    }
}
