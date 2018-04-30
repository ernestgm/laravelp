<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasnegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediasnegocio', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_negocio');
            $table->foreign('id_negocio')
                ->references('id')->on('negocio')
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
        Schema::dropIfExists('mediasnegocio');
    }
}
