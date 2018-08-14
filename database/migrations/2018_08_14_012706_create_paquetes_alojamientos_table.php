<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesAlojamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes_alojamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paquete_id');
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->integer('alojamiento_id');
            $table->foreign('alojamiento_id')->references('id')->on('alojamientos');
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
        Schema::dropIfExists('paquetes_alojamientos');
    }
}
