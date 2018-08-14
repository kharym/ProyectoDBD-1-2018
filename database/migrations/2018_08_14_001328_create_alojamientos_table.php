<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlojamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latitud_id');
            $table->string('longitud_id');
            $table->string('nombreAlojamiento',20);
            $table->integer('calificacion');
            $table->timestamps();

            $table->foreign('latitud_id')->references('latitud')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('longitud_id')->references('longitud')->on('ubicaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alojamientos');
    }
}
