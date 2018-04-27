<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasfavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertasfavoritos', function (Blueprint $table) {
            $table->increments('id');

            $table->foreign('id_oferta')
                ->references('id')->on('oferta')
                ->onDelete('cascade');

            $table->foreign('id_usuario')
                ->references('id')->on('usuario');

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
        Schema::dropIfExists('ofertasfavoritos');
    }
}