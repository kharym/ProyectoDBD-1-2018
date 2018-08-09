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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('historialusuario_id');
            $table->string('name',30);
            $table->string('email',50)->unique();
            $table->string('password',10);
            $table->integer('dni_Pasaporte');
            $table->integer('fondos');
            $table->integer('rol');
            $table->rememberToken();
            $table->timestamps();

            /* llaves foraneas*/

           /* $table->foreign('historialusuario_id')->references('id')->on('historialusuarios')->onDelete('cascade');*/
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
