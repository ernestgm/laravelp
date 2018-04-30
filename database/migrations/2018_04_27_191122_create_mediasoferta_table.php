<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasofertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediasoferta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resolucion');

            $table->unsignedInteger('id_oferta');
            $table->foreign('id_oferta')
                ->references('id')->on('oferta')
                ->onDelete('cascade');

            $table->unsignedInteger('id_media');
            $table->foreign('id_media')
                ->references('id')->on('media')
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
        Schema::dropIfExists('mediasoferta');
    }
}
