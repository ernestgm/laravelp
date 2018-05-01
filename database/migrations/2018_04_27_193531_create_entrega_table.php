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

            $table->unsignedInteger('oferta_id');
            $table->foreign('oferta_id')
                ->references('id')->on('oferta')
                ->onDelete('cascade');

            $table->unsignedInteger('tipoentrega_id');
            $table->foreign('tipoentrega_id')
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
