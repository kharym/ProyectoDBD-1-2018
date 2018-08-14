<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes_autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->integer('auto_id')->unsigned();
            $table->foreign('auto_id')->references('id')->on('autos');
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
        Schema::dropIfExists('paquetes_autos');
    }
}
