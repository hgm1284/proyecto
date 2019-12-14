<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DiaCambios extends Model
{
  use SoftDeletes;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'dias_cambios';
  
  protected $fillable = ['id_cambio','fecha','delete_by'];

  /**
  * Get the post that owns the comment.
  */
  public function cambio()
  {
    return $this->belongsTo('App\Cambio','id_cambio');
  }

}
