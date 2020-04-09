<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoSaludos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tipo_saludos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('pago');
          $table->string('free');

        });
    }


    public function down()
    {
      Schema::dropIfExists('tipo_saludos');
    }
}
