<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaClinicaGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clinica_general', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('dato1');
            $table->boolean('dato2');
            $table->boolean('dato3');
            $table->boolean('dato4');
            $table->boolean('dato5');
            $table->boolean('dato6');
            $table->boolean('dato7');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')
                  ->references('id')
                  ->on('pacientes');
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
        Schema::drop('historia_clinica_general');
    }
}
