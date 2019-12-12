<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolAnual extends Model
{
  protected $table = 'roles_anual';
  protected $fillable = [
     'id_rol','id_rolanual','mes'
  ];

  public function rol()
  {
    return $this->hasMany('App\Role','id','id_rol');
  }
  
}
