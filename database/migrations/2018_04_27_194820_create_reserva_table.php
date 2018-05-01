<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->unique();
            $table->integer('adultos');
            $table->integer('niños');
            $table->double('precio_total');
            $table->integer('estado');
            $table->dateTime('fecha_reserva');
            $table->dateTime('fecha_creacion');
            $table->dateTime('fecha_vencimiento');

            $table->unsignedInteger('oferta_id');
            $table->foreign('oferta_id')
                ->references('id')->on('oferta')
                ->onDelete('cascade');

            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')
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
        Schema::dropIfExists('reserva');
    }
}
