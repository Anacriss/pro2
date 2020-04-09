<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saludos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('saludo');
            $table->string('celular');
            $table->integer('contacto_id')->unsigned();
            $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tipo_saludos_id')->unsigned();
            $table->foreign('tipo_saludos_id')->references('id')->on('tipo_saludos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saludos');
    }
}
