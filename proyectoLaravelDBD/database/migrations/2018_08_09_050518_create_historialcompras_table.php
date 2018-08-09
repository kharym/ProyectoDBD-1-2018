<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialcomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialcompras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id');
            $table->date('fechaCompra');
            $table->time('horaCompra');
            $table->integer('tipoCompra');
            $table->integer('metodoDePago');
            $table->integer('monto');
            $table->string('descripcion',200); 
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialcompras');
    }
}
