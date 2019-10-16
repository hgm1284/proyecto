<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermera extends Model
{
  protected $fillable = [
      'name', 'lastname', 'fecha_ingreso', 'id_rolusuario', 'id_servicio', 'id_profile'
  ];

  protected $dates = ['fecha_ingreso', 'fecha_final'];

  public $timestamps = false;

}
