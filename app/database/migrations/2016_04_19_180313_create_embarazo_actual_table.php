<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbarazoActualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarazo_actual', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('dato1');
            $table->boolean('dato2');
            $table->boolean('dato3');
            $table->boolean('dato4');
            $table->boolean('dato5');
            $table->boolean('dato6');
            $table->boolean('dato7');
            $table->boolean('dato8');
            $table->boolean('dato9');
            $table->boolean('dato10');
            $table->boolean('dato11');
            $table->boolean('dato12');
            $table->integer('pacientes_id')->unsigned();
            $table->foreign('pacientes_id')
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
        Schema::drop('embarazo_actual');
    }
}
