<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConclusionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conclusion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('evaluacion_medica');
            $table->string('referido_a');
            $table->date('fecha');
            $table->string('nombre');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')
                  ->references('id')->on('pacientes');
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
        Schema::drop('conclusion');
    }
}
