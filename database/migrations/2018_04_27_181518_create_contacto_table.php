<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')->on('usuario')
                ->onDelete('cascade');

            $table->unsignedInteger('id_municipio');
            $table->foreign('id_municipio')
                ->references('id')->on('municipio');

            $table->unsignedInteger('id_negocio');
            $table->foreign('id_negocio')
                ->references('id')->on('negocio');

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
        Schema::dropIfExists('contacto');
    }
}
