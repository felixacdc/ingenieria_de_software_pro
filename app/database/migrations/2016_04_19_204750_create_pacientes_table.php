<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_registro');
            $table->integer('no_boleta');
            $table->string('nombre_paciente');
            $table->integer('edad_paciente')->unsigned();
            $table->string('pueblo_paciente');
            $table->string('escolaridad_paciente');
            $table->string('ocupacion_paciente');
            $table->string('nombre_esposo');
            $table->integer('edad_esposo')->unsigned();
            $table->string('pueblo_esposo');
            $table->string('escolaridad_esposo');
            $table->string('ocupacion_esposo');
            $table->integer('distancia_se_si_cercana')->unsigned(); # en KM
            $table->decimal('tiempo_para_llegar', 5, 2); # en Horas
            $table->string('nombre_comunidad');
            $table->string('dpi_pasiente_com_esp'); # com = comunitario y esp = edad_esposo
            $table->date('fecha_ultima_regla');
            $table->date('fecha_probable_parto');
            $table->integer('no_embarazos');
            $table->integer('no_partos');
            $table->integer('no_cesarias');
            $table->integer('no_abortos');
            $table->integer('no_hijos_vivos');
            $table->integer('no_hijos_muertos');
            $table->integer('user_id')->unsigned();
            $table->integer('centro_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('centro_id')
                  ->references('id')
                  ->on('centros');

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
        Schema::drop('pacientes');
    }
}
