<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
  protected $table = "centros";
  protected $fillable = ['centro', 'tipo_centro_id'];
}
