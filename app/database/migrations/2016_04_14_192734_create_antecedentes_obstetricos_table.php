<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesObstetricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes_obstetricos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('dato1');
            $table->boolean('dato2');
            $table->boolean('dato3');
            $table->boolean('dato4');
            $table->boolean('dato5');
            $table->boolean('data6');
            $table->boolean('data7');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')
                  ->references('id')->on('patients')
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
        Schema::drop('antecedentes_obstetricos');
    }
}
