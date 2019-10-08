<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
  protected $fillable = [
      'tipo_privilegio', 'detalle'
  ];

  public $timestamps = false;

}
