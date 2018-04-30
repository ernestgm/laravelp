<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio');

            $table->unsignedInteger('id_oferta');
            $table->foreign('id_oferta')
                ->references('id')->on('oferta')
                ->onDelete('cascade');

            $table->unsignedInteger('id_tipoentrega');
            $table->foreign('id_tipoentrega')
                ->references('id')->on('tipoentrega');

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
        Schema::dropIfExists('entrega');
    }
}
