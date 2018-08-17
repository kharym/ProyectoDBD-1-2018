<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned();
            $table->integer('proveedor_auto_id')->unsigned();
            $table->string('patente', 8);
            $table->integer('precio');
            $table->text('marca');
            $table->text('modelo');
            $table->date('fechaArriendo');
            $table->time('horaArriendo');
            $table->date('fechaDevolucion');
            $table->time('horaDevolucion');
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
            $table->foreign('proveedor_auto_id')->references('id')->on('proveedor_autos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
