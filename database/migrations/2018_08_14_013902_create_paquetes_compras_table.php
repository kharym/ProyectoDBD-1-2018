<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('compras');
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
        Schema::dropIfExists('paquetes_compras');
    }
}
