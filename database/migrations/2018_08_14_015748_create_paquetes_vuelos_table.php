<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes_vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->integer('vuelo_id')->unsigned();
            $table->foreign('vuelo_id')->references('id')->on('vuelos');
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
        Schema::dropIfExists('paquetes_vuelos');
    }
}
