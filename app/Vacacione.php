<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacacione extends Model
{
  protected $fillable = [
      'fecha_inicio', 'fecha_final', 'id_enfermera'
  ];

  protected $dates = ['fecha_inicio', 'fecha_final'];

  public $timestamps = false;
}
