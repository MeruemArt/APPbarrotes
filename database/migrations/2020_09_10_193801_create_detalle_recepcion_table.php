<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleRecepcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_recepcion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pedido_id')->unsigned();
            $table->bigInteger('detalle_pedido_id')->unsigned();
            $table->timestamps();
            $table->foreign('pedido_id')->references('id')->on('pedido');
            $table->foreign('detalle_pedido_id')->references('id')->on('detalle_pedido');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_recepcion');
    }
}
