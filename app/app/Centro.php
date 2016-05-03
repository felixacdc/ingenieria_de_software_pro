<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Centro extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
