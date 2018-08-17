<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrasladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traslados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned();
            $table->integer('proveedor_traslado_id')->unsigned();
            $table->integer('ubicacion_id');
            $table->integer('precioTraslado');
            $table->text('planificacionParadas');
            $table->integer('numeroParadas');
            $table->integer('totalPasajeros');
            $table->date('fechaTraslado');
            $table->time('horaTraslado');
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
            $table->foreign('proveedor_traslado_id')->references('id')->on('proveedor_traslados')->onDelete('cascade');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traslados');
    }
}
