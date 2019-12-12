<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
  protected $fillable = [
      'periodo'
  ];

  /* Query Scope*/
 public function scopeName($query, $periodo)
 {
    if (trim($name) != ""){
      $query->where('periodo', 'LIKE' ,"%$periodo");
    }

 }

}
