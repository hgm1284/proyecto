<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolAnual extends Model
{
  protected $fillable = [
       'id_enfermera', 'id_servicio', 'id_rol'
  ];

}
