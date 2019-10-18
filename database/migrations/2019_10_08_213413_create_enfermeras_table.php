<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermeras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('cedula')->unique();
            $table->datetime('fecha_ingreso');
            $table->bigInteger('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->bigInteger('id_profile')->unsigned();
            $table->foreign('id_profile')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermeras');
    }
}
