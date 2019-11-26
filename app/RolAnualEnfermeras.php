<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolAnualEnfermeras extends Model
{
  protected $table = 'rolesanualenfermeras';
  protected $fillable = [
     'id_enfermera','anno','id_servicio'
  ];
}
