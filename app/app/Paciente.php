<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table='pacientes';

    protected $fillable =
    [
     'no_registro',
     'no_boleta',
     'nombre',
     'edad',
     'pueblo',
     'escolaridad',
     'ocupacion',
     'nombre_esposo',
     'edad_esposo',
     'pueblo_esposo',
     'escolaridad_esposo',
     'ocupacion_esposo',
     'distancia_se_si_cercana',
     'tiempo_para_llegar',
     'nombre_comunidad',
     'dpi_paciente_com_esp',
     'fecha_ultima_regla',
     'fecha_probable_parto',
     'no_embarazos',
     'no_partos',
     'no_cesarias',
     'no_abortos',
     'no_hijos_vivos',
     'no_hijos_muertos',
     'user_id',
     'centro_id'
      ];
}
