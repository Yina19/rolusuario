<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('nid')->unsigned();
            $table->string('email');
            $table->string('password');
            //$table->integer('id_role')->unsigned();
            $table->bigInteger('id_role')->unsigned();
            $table->timestamps();

            //$table->foreign('id_role')->references('id')->on('roles')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
