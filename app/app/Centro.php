<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
  protected $table = "centros";
  protected $fillable = ['centro', 'tipo_centro_id','direccion','telefono','padre', 'distrito'];

  public  $relations=[
      'tipo_centro'
    ];

    public function tipo_centro()
    {
      return $this->hasOne('App\Tipo_centro' , 'id' , 'tipo_centro_id');
    }
}
