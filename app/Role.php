<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = [
      'nomenclatura', 'detalle'
  ];

  public $timestamps = false;
}
