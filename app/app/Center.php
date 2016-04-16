<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = "centers";

    protected $fillable = ['center', 'type_service_health_id'];
}
