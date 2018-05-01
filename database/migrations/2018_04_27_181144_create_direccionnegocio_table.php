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
            $table->string('geolocalizacion')->default('{}');

            $table->unsignedInteger('negocio_id');
            $table->foreign('negocio_id')
                ->references('id')->on('negocio')
                ->onDelete('cascade');

            $table->unsignedInteger('direccion_id');
            $table->foreign('direccion_id')
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
