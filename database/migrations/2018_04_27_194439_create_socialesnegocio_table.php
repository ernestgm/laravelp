<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialesnegocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialesnegocio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');

            $table->unsignedInteger('negocio_id');
            $table->foreign('negocio_id')
                ->references('id')->on('negocio')
                ->onDelete('cascade');

            $table->unsignedInteger('redsocial_id');
            $table->foreign('redsocial_id')
                ->references('id')->on('redsocial');

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
        Schema::dropIfExists('socialesnegocio');
    }
}
