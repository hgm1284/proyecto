<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacacionesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('vacaciones', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->datetime('fecha_inicio')->nullable();
      $table->datetime('fecha_final')->nullable();
      $table->bigInteger('id_enfermera')->unsigned();
      $table->foreign('id_enfermera')->references('id')->on('enfermeras');
      $table->bigInteger('id_periodo')->unsigned();
      $table->foreign('id_periodo')->references('id')->on('periodos');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('vacaciones');
  }
}
