<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesanualenfermerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolesanualenfermeras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_enfermera')->unsigned();
            $table->foreign('id_enfermera')->references('id')->on('enfermeras');
            $table->bigInteger('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->bigInteger('id_profile')->unsigned();
            $table->foreign('id_profile')->references('id')->on('profiles');
            $table->year('anno');
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
        Schema::dropIfExists('rolesanualenfermeras');
    }
}
