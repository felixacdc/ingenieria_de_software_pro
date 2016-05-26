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
     'nombre_paciente',
     'edad_paciente',
     'pueblo_paciente',
     'escolaridad_paciente',
     'ocupacion_paciente',
     'nombre_esposo',
     'edad_esposo',
     'pueblo_esposo',
     'escolaridad_esposo',
     'ocupacion_esposo',
     'distancia_se_si_cercana',
     'tiempo_para_llegar',
     'nombre_comunidad',
     'municipio',
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

      public  $relations=[
          'antecedentes',
          'embarazoActual',
          'historiaClinica',
          'conclusion'
        ];

      public function antecedentes()
      {
          return $this->hasOne('App\antecedentes_obstetricos', 'pacientes_id');
      }

      public function embarazoActual()
      {
          return $this->hasOne('App\embarazo_actual', 'pacientes_id');
      }

      public function historiaClinica()
      {
          return $this->hasOne('App\Historia_clinica_general', 'paciente_id');
      }

      public function conclusion()
      {
          return $this->hasOne('App\Conclusion', 'paciente_id');
      }
}
