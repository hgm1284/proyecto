<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_cambios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_cambio')->unsigned();
            $table->foreign('id_cambio')->references('id')->on('cambios');
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
        Schema::dropIfExists('dias_cambios');
    }
}
