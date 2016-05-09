<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user')->unique();
            $table->string('password', 60);
            $table->string('name');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone', 8);
            $table->boolean('state');

            $table->integer('centro_id')->unsigned();
            $table->integer('tipo_usuario_id')->unsigned();

            $table->rememberToken();


            $table->foreign('centro_id')
                  ->references('id')
                  ->on('centros');

            $table->foreign('tipo_usuario_id')
                  ->references('id')
                  ->on('tipo_usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
