<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')->on('usuario')
                ->onDelete('cascade');

            $table->unsignedInteger('id_pais');
            $table->foreign('id_pais')
                ->references('id')->on('pais');

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
        Schema::dropIfExists('cliente');
    }
}
