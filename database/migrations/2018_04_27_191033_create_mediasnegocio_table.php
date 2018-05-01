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
            $table->string('resolucion');

            $table->unsignedInteger('negocio_id');
            $table->foreign('negocio_id')
                ->references('id')->on('negocio')
                ->onDelete('cascade');

            $table->unsignedInteger('media_id');
            $table->foreign('media_id')
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
