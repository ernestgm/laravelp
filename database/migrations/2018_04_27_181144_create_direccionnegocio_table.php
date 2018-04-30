<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionNegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccionnegocio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('geolocalizacion');

            $table->unsignedInteger('id_negocio');
            $table->foreign('id_negocio')
                ->references('id')->on('negocio')
                ->onDelete('cascade');

            $table->unsignedInteger('id_direccion');
            $table->foreign('id_direccion')
                ->references('id')->on('direccion')
                ->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipio');
    }
}
