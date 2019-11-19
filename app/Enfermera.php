<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermera extends Model
{
  protected $fillable = [
      'name', 'lastname', 'cedula', 'fecha_ingreso', 'id_rolusuario', 'id_servicio', 'id_profile'
  ];

  protected $dates = ['fecha_ingreso', 'fecha_final'];

       /* Query Scope*/
  public function scopeName($query, $name)
  {
       if (trim($name) != ""){
         $query->where('name', 'LIKE' ,"%$name%");
       }

  }

  /**
   * obtiene las vacaciones del enfermero
   */
  public function vacaciones()
  {
      return $this->hasMany('App\Vacacione','id_enfermera','id');
  }



}
