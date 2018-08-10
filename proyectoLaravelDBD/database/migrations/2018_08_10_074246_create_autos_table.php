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
            $table->integer('compra_id');
            $table->integer('proveedor_auto_id');
            $table->string('patente',10)->unique();
            $table->integer('precio');
            $table->string('marca',15);
            $table->string('modelo',20);
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
