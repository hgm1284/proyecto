<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolAnualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_anual', function (Blueprint $table) {
            $table->bigInteger('id_enfermera')->unsigned();
            $table->foreign('id_enfermera')->references('id')->on('enfermeras');
            $table->bigInteger('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->bigInteger('id_rol')->unsigned()->nullable();
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->String('mes')->nullable();
            $table->year('anno')->nullable();
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
        Schema::dropIfExists('roles_anual');
    }
}
