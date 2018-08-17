<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned()->nullable();
            $table->string('nombreActividad',50);
            $table->integer('precioActividad');
            $table->string('descripcion',250);
            $table->integer('numeroNinos');
            $table->integer('numeroAdultos');
            $table->date('fechaInicio');
            $table->time('horaInicio');
            $table->date('fechaTermino');
            $table->time('horaTermino');
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
        Schema::dropIfExists('actividads');
    }
}
