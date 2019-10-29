<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $fillable = [
      'nombre', 'descripcion'
  ];

  public $timestamps = false;

     /* Query Scope*/
    public function scopeName($query, $name)
    {
       if (trim($name) != ""){
         $query->where('nombre', 'LIKE' ,"%$name%");
       }
   
    }

}
