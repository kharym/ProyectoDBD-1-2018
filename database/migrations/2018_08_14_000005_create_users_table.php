<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('historialuser_id')->unsigned();
            $table->string('name',30);
            $table->string('email',50)->unique();
            $table->string('password',10);
            $table->integer('dni_Pasaporte');
            $table->integer('fondos');
            $table->integer('rol');
            $table->timestamps();
            
            $table->foreign('historialuser_id')->references('id')->on('historialusers')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
