<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('estado');
            $table->string('nombre');
            $table->double('precio');
            $table->string('modalidad_precio');
            $table->dateTime('fecha_activa_inicio');
            $table->dateTime('fecha_activa_fin');

            $table->unsignedInteger('id_negocio');
            $table->foreign('id_negocio')
                ->references('id')->on('negocio')
                ->onDelete('cascade');

            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria')
                ->references('id')->on('categoria');

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
        Schema::dropIfExists('oferta');
    }
}
