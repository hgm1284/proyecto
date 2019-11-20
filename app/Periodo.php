<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'periodos';
  
  protected $fillable = ['periodo'];

}
