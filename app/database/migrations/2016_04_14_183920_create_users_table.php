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
            $table->string('user');
            $table->string('password', 60);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 8);

            $table->integer('center_id')->unsigned();
            $table->integer('type_user_id')->unsigned();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('center_id')
                  ->references('id')
                  ->on('centers');

            $table->foreign('type_user_id')
                  ->references('id')
                  ->on('type_users');
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
