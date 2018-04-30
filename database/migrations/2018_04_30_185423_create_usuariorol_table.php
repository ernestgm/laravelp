<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariorolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariorol', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')->on('usuario')
                ->onDelete('cascade');

            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol')
                ->references('id')->on('rol');

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
        Schema::dropIfExists('usuariorol');
    }
}
