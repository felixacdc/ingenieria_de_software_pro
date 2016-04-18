<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class embarazo_actual extends Model
{
    //
    protected $table ='embarazo_actual';

    protected $fillable=[
      'dato1',
      'dato2',
      'dato3',
      'dato4',
      'dato5',
      'dato6',
      'dato7',
      'dato8',
      'dato9',
      'dato10',
      'dato11',
      'dato12',
      'patient_id'

    ];
}
