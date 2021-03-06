<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{

    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('dni');

        });
    }


    public function down()
    {
        Schema::dropIfExists('contactos');
    }
}
