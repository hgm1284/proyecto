<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolAnualEnfermeras extends Model
{
  protected $table = 'rolesanualenfermeras';
  protected $fillable = [
     'id_enfermera','anno','id_servicio'
  ];

  public function meses()
  {
    return $this->hasMany('App\RolAnual','id_rolanual','id');
  }

  public function enfermero()
  {
    return $this->hasMany('App\Enfermera','id','id_enfermera');
  }

}
