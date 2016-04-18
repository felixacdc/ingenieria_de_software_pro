<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia_clinica_general extends Model
{
    //
    protected $table='historia_clinica_general';

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
