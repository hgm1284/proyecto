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
            $table->bigIncrements('id');
            $table->bigInteger('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->bigInteger('id_rolanual')->unsigned();
            $table->foreign('id_rolanual')->references('id')->on('rolesanualenfermeras');
            $table->String('mes');
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
