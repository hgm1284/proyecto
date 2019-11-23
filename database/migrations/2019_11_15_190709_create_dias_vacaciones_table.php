<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasVacacionesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('dias_vacaciones', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('id_vacaciones')->unsigned();
      $table->foreign('id_vacaciones')->references('id')->on('vacaciones');
      $table->date('fecha'); //día exacto
      $table->bigInteger('delete_by')->unsigned()->nullable();
      $table->foreign('delete_by')->references('id')->on('users');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('dias_vacaciones');
  }
}
