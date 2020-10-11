<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idmesa')->unsigned();
            $table->integer('idpersona')->unsigned();
            $table->timestamps();
            $table->foreign('idmesa')->references('id')->on('mesa')->ondelete('cascade');
            $table->foreign('idpersona')->references('id')->on('persona')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_persona');
    }
}
