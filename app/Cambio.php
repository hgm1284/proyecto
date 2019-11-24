<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{

protected $table = 'cambios';

protected $fillable = [
  'id_enfermera', 'id_servicio', 'id_rol'
];


/**
* obtiene los dias que pertenecen al cambio
*/
public function dias()
{
  return $this->hasMany('App\DiaCambios','id_cambio','id');
}

}
