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

            $table->unsignedInteger('id_negocio');
            $table->foreign('id_negocio')
                ->references('id')->on('negocio')
                ->onDelete('cascade');

            $table->unsignedInteger('id_redsocial');
            $table->foreign('id_redsocial')
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
