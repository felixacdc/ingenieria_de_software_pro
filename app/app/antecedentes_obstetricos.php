<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentes_obstetricos extends Model
{
    //
    protected $table='antecedentes_obstetricos';
    protected $fillable=[
      'dato1',
      'dato2',
      'dato3',
      'dato4',
      'dato5',
      'dato6',
      'dato7',
      'patient_id'
    ];
}
