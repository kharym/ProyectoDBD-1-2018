<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precioDescuento');
            $table->integer('tipoPaquete');
            $table->integer('precioNormal');
            $table->string('descripcion',150);
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
        Schema::dropIfExists('paquetes');
    }
}
