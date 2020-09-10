<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolucion', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_fact');
            $table->dateTime('fecha', 0);
            $table->integer('unidades');
            $table->double('total', 8, 2);
            $table->string('motivo');
            $table->bigInteger('pedido_id')->unsigned();
            $table->bigInteger('proveedor_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
            $table->timestamps();
            $table->foreign('pedido_id')->references('id')->on('pedido');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devolucion');
    }
}
