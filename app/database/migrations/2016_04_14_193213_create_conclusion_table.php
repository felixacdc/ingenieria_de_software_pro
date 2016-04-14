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
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')
                  ->references('id')->on('patients');
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
