<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = [
      'nomenclatura', 'detalle'
  ];

  public $timestamps = false;

    /* Query Scope*/
    public function scopeName($query, $name)
    {
      if (trim($name) != ""){
        $query->where('nomenclatura', 'LIKE' ,"%$name%");
      }
  
    }
}
