<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id');
            $table->integer('aerolinea_id');
            $table->integer('aeropuertoOrigen_id');
            $table->integer('aeropuertoDestino_id');
            $table->integer('tipoVuelo');
            $table->integer('precioVuelo');
            $table->integer('numeroEscala');
            $table->integer('cantidadEquipaje');
            $table->date('fechaPartida');
            $table->time('horaPartida');
            $table->date('fechaRegreso');
            $table->time('horaRegreso');
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
            $table->foreign('aerolinea_id')->references('id')->on('aerolineas')->onDelete('cascade');
            $table->foreign('aeropuertoOrigen_id')->references('id')->on('aeropuertos')->onDelete('cascade');
            $table->foreign('aeropuertoDestino_id')->references('id')->on('aeropuertos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
}
