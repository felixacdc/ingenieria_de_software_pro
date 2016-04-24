<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centro');
            $table->string('direccion');
            $table->bigInteger('telefono');
            $table->boolean('distrito')->default(false);
            $table->integer('padre')->unsigned()->default(1);
            $table->integer('tipo_centro_id')->unsigned();
            $table->foreign('tipo_centro_id')
                  ->references('id')
                  ->on('tipo_centro');
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
        Schema::drop('centros');
    }
}
