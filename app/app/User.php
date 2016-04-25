<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'password', 'name', 'email', 'address', 'phone', 'centro_id', 'tipo_usuario_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public  $relations=[
        'centro',
        'tipo'
      ];

      public function setPasswordAttribute($value)
    {
        if(! empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

      public function centro()
      {
        return $this->hasOne('App\Centro' , 'id' , 'centro_id');
      }

      public function tipo()
      {
        return $this->hasOne('App\Tipo_usuario' , 'id' , 'tipo_usuario_id');
      }

}
