<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conclusion extends Model
{
    //
    protected $table='conclusion';

    protected $fillable=[
      'evaluacion_medica',
      'referido_a',
      'fecha',
      'nombre',
      'paciente_id'
    ];
}
