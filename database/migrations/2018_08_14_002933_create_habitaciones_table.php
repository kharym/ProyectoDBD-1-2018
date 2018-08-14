<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned();
            $table->integer('alojamiento_id')->unsigned();
            $table->integer('precioHabitacion');
            $table->integer('calificacion');
            $table->integer('numeroAdultos');
            $table->integer('numeroNinos');
            $table->integer('tipoHabitacion');
            $table->date('fechaIngreso');
            $table->time('horaIngreso');
            $table->date('fechaSalida');
            $table->time('horaSalida');
            $table->timestamps();

            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
            $table->foreign('alojamiento_id')->references('id')->on('alojamientos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
